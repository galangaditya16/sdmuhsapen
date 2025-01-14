<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Base\Controller\BaseController;
use App\Base\Repositories\AppRepository;

class GalleryController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Gallery::orderBy('created_at', 'ASC')->paginate(10);
        return $this->makeView('backend.pages.management.gallery.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return $this->makeView('backend.pages.management.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            if($request->hasFile('image_thumnail')){
                $path      = public_path('assets/images/gallery/thumbnail');
                $namaImage = time().'.'. $request->image_thumnail->getClientOriginalExtension();
                $request->image_thumnail->move($path, $namaImage);
                $request['thumbnail'] = $namaImage;
            }
            $request['slug_id'] = Str::slug($request->title_id);
            $request['slug_en'] = Str::slug($request->title_en);
            $data = new Gallery($request->input());
            $data->save();
            return redirect()->route('gallery.index')->with('success','Berhasil Menyimpan Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('content.index')->with('error','Gagal Menyimpan Data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Gallery::findOrfail($id);
        return $this->makeView('backend.pages.management.gallery.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        try {

            $data = Gallery::findOrfail($id);
            return $this->makeView('backend.pages.management.gallery.edit',compact('data'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('content.index')->with('error','Gagal Melakukan Aksi');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function uploadImages(Request $request, $id)
    {
        try {

            $data = Gallery::findOrFail($id);
            $data_ori = json_decode($data->images, true);
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $path = public_path('assets/images/gallery');
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $nameImages = Str::random(5) . '-' . time() . '.' . $file->getClientOriginalExtension();
                $file->move($path, $nameImages);
                if (is_array($data_ori)) {
                    $data_ori[] = $nameImages;
                } else {
                    $data_ori = [$nameImages];
                }
                if($data->path == null){
                    $data->path = asset('assets/images/gallery');
                }
                $data->images = json_encode($data_ori);
                $data->save();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Image uploaded and updated successfully!',
                    'image' => $nameImages,
                ]);
            }

            // Jika tidak ada file yang diunggah
            return response()->json([
                'status' => 'error',
                'message' => 'No file uploaded.',
            ], 400);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data not found.',
            ], 404);
        } catch (\Throwable $th) {
            // Penanganan exception umum
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred: ' . $th->getMessage(),
            ], 500);
        }
    }

    public function getAsset($id){
        try {
            $data = Gallery::findOrfail($id);
            return response()->json(['success' => true, 'data' => $data], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()], 404);
        }
    }

    public function removeAsset(Request $request)
    {
        try {
            // Validate incoming request
            $validatedData = $request->validate([
                'assetId' => 'required|numeric',
                'imageId' => 'required',
            ]);

            if (!$validatedData) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation failed.',
                    'errors' => $validatedData->errors(),
                ], 422);
            }

            $gallery = Gallery::findOrFail($request->assetId);
            if ($gallery->images != NULL) {
                $images_data = json_decode($gallery->images, true);
                $valueToRemove = $request->imageId;
                if (in_array($request->imageId, $images_data)){
                    $array = array_filter($images_data, function ($value) use ($valueToRemove) {
                        return $value !== $valueToRemove;
                    });
                    $array = array_values($array);
                    $img_remove = public_path('assets/images/gallery').'/'.$valueToRemove;
                    if (file_exists($img_remove)) {
                        unlink($img_remove);
                    }
                    $gallery->images = json_encode($array);
                    $gallery->save();

                    return response()->json([
                        'status' => 'success',
                        'message' => 'Image successfully removed.',
                    ]);
                } else {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Image not found.',
                    ], 404);
                }
            }



        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while removing the image.',
                'error' => $th->getMessage(),
            ], 500);
        }
    }


}

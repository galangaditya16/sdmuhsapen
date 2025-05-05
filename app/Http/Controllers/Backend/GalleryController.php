<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Base\Repositories\AppRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GalleryController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (!Auth::user()->can('gallery-view')) {
            abort(403);
        }
        $data = Gallery::orderBy('created_at', 'ASC')->paginate(10);
        return $this->makeView('backend.pages.management.gallery.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if (!Auth::user()->can('gallery-create')) {
            abort(403);
        }
        return $this->makeView('backend.pages.management.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('gallery-create')) {
            abort(403);
        }
        try {
            if ($request->hasFile('image_thumnail')) {
                $path      = public_path('assets/images/gallery/thumbnail');
                $namaImage = time() . '.' . $request->image_thumnail->getClientOriginalExtension();
                $request->image_thumnail->move($path, $namaImage);
                $request['thumbnail'] = $namaImage;
            }
            $request['slug_id'] = Str::slug($request->title_id);
            $request['slug_en'] = Str::slug($request->title_en);
            $data = new Gallery($request->input());
            $data->save();
            return redirect()->route('gallery.index')->with('success', 'Berhasil Menyimpan Data');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('content.index')->with('error', 'Gagal Menyimpan Data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        if (!Auth::user()->can('gallery-view')) {
            abort(403);
        }
        $data = Gallery::findOrfail($id);
        return $this->makeView('backend.pages.management.gallery.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        try {
            if (!Auth::user()->can('gallery-edit')) {
                abort(403);
            }
            $data = Gallery::findOrfail($id);
            return $this->makeView('backend.pages.management.gallery.edit', compact('data'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->route('content.index')->with('error', 'Gagal Melakukan Aksi');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::user()->can('gallery-edit')) {
            abort(403);
        }
        try {
            $data = Gallery::findOrfail($id);
            if($request->has('image_thumnail')){
                $path = public_path('assets/images/gallery/thumbnail');
                if ($data->thumbnail && file_exists($path . '/' . $data->thumbnail)) {
                    unlink($path . '/' . $data->thumbnail);
                }
                $namaImage = time() . '.' . $request->image_thumnail->getClientOriginalExtension();
                $request->image_thumnail->move($path, $namaImage);
                $request['thumbnail'] = $namaImage;
            }else{
                $request['thumbnail'] = $data->thumbnail;
            }
            $data->update($request->input());
            return redirect()->route('gallery.index')->with('success', 'Berhasil Menyimpan Data');
        } catch (\Throwable $th) {
            dd($th);
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::user()->can('gallery-delete')) {
            abort(403);
        }
        try {
            $data = Gallery::findOrfail($id);
            $data->delete();
            return redirect()->route('gallery.index')->with('success', 'Success Delete Data');
        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function uploadImages(Request $request, $id)
    {
        try {
            $data = Gallery::findOrFail($id);
            if ($request->hasFile('file')) {
                $request->validate([
                    'file' => 'required|image|mimes:jpeg,png,jpg|max:5120', // max 5 mb
                ]);

                $file = $request->file('file');
                $path = public_path('assets/images/gallery');

                // Buat direktori jika belum ada
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }

                // Nama file unik
                $nameImages = Str::random(5) . '-' . time() . '.' . $file->getClientOriginalExtension();

                // Kompres dan simpan gambar
                $img = Image::make($file->getRealPath());
                $img->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path . '/' . $nameImages, 70); // Kualitas 70

                // Tambahkan gambar ke array
                $data_ori = json_decode($data->images, true) ?? [];
                $data_ori[] = $nameImages;

                // Update data
                if ($data->path == null) {
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



    public function getAsset($id)
    {
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
                if (in_array($request->imageId, $images_data)) {
                    $array = array_filter($images_data, function ($value) use ($valueToRemove) {
                        return $value !== $valueToRemove;
                    });
                    $array = array_values($array);
                    $img_remove = public_path('assets/images/gallery') . '/' . $valueToRemove;
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

    public function headline($id)
    {
        try {
            $data = Gallery::findOrfail($id);

            if ($data->headline == null) {
                $counter = Gallery::whereNotNull('headline')->get();
                if (count($counter) > 6) {
                    return redirect()->route('gallery.index')->with('error', 'Headline Max 5');
                } else {
                    $data->headline = 1;
                    $data->save();
                    return redirect()->route('gallery.index')->with('success', 'Success Add Headline');
                }
            } else {
                $data->headline = NULL;
                $data->save();
                return redirect()->route('gallery.index')->with('success', 'Success Remove Headline');
            }
        } catch (\Throwable $th) {
            abort(404);
        }
    }
}

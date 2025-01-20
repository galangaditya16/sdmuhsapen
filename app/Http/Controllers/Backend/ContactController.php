<?php

namespace App\Http\Controllers\Backend;

use App\Base\Controller\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ContactController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return redirect()->route('contact.show', 1);
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Gagal melakukan aksi');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        try {
            if ($request->has('logo')) {
                $nameImage = time() . '.' . $request->logo->extension();
                $path = public_path('assets/images/contact');
                $request->logo->move($path, $nameImage);
                $request['image']  = $nameImage;
            }
            $request['slug']    = Str::slug($request->name) ?? '-';
            $data  = new Contact($request->input());
            $data->save();
            return redirect()->route('contact.index')->with('success', 'Data Success Save');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Gagal melakukan aksi');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Contact::latest()->first();
            return $this->makeView('backend.pages.master.contact.edit', compact('data'));
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Gagal melakukan aksi');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try {
            $data = Contact::findorfail($id);
            $path = public_path('assets/images/contact');
            if ($request->has('logo')) {
                if ($data->logo) {
                    \File::delete(public_path('assets/images/contact/' . $data->logo));
                    $nameImage = time() . '.' . $request->logo->extension();
                    $request->logo->move($path, $nameImage);
                    $request['image']   = $nameImage;
                } else {
                    $request['image'] = $data->logo;
                }
            }
            $data->update($request->input());
            return redirect()->route('contact.index')->with('success', 'Data Success Save');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Gagal melakukan aksi');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function contactUs(Request $request)
    {
        try {
            // TODO: write the logic here
            return redirect()->back()->with('success', 'Data Success Save');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', 'Gagal melakukan aksi');
        }
    }
}

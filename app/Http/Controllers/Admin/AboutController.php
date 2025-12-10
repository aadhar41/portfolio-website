<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AboutDataTable;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AboutDataTable $dataTable)
    {
        return $dataTable->render('admin.about.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $about = About::first();
        return view("admin.about.create", compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;
        // Handle optional image upload
        $imagePath = handleUploads('image', null);
        if ($imagePath) {
            $about->image = $imagePath;
        }
        // Handle optional resume upload
        $resumePath = handleUploads('resume', null);
        if ($resumePath) {
            $about->resume = $resumePath;
        }
        $about->save();

        toastr()->success('About created successfully.','Success!');
        return redirect()->route('admin.about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function resumeDownload(About $about)
    {
        $about = About::first();
        return response()->download(public_path($about->resume));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = About::findOrFail($id);
        return view("admin.about.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, $id)
    {
        $about = About::findOrFail($id);
        // Handle image upload; if a new file is uploaded, replace, otherwise keep existing
        $imagePath = handleUploads('image', $about);
        if ($imagePath) {
            $about->image = $imagePath;
        }
        // Handle resume upload similarly
        $resumePath = handleUploads('resume', $about);
        if ($resumePath) {
            $about->resume = $resumePath;
        }
        $about->title = $request->title ?? $about->title;
        $about->description = $request->description ?? $about->description;
        $about->save();

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = About::findOrFail($id);
        $data->delete();

        toastr()->error('Details deleted successfully.','Success!');
        return redirect()->back();
    }
}

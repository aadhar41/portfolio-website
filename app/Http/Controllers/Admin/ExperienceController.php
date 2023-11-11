<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ExperienceDataTable;
use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ExperienceDataTable $dataTable)
    {
        return $dataTable->render('admin.experience.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Experience::first();
        return view("admin.experience.create", compact('data'));
        // return view("admin.experience.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExperienceRequest $request)
    {
        $about = new Experience();
        $about->name = $request->name;
        $about->description = $request->description;
        $about->save();
        toastr()->success('About created successfully.','Success!');
        return redirect()->route('admin.experience.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Experience::findOrFail($id);
        return view("admin.experience.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperienceRequest $request, $id)
    {
        $data = Experience::find($id);
        $imagePath = handleUploads('image', $data);
        Experience::updateOrCreate([
            'id' => $id,
        ], [
            'title' => !empty($request->title) ? $request->title : "",
            'description' => !empty($request->description) ? $request->description : "",
            'image' => !empty($imagePath) ? $imagePath : $data->image,
            'phone' => !empty($request->phone) ? $request->phone : "",
            'email' => !empty($request->email) ? $request->email : "",
        ]);

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.experience.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Experience::findOrFail($id);
        $data->delete();
        deleteFileIfExists($data->image);
        toastr()->error('Details deleted successfully.','Success!');
        return redirect()->route('admin.experience.create');
    }
}

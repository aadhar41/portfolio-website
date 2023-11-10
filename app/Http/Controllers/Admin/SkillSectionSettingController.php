<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SkillSectionSetting;
use App\Http\Requests\StoreSkillSectionSettingRequest;
use App\Http\Requests\UpdateSkillSectionSettingRequest;
use Illuminate\Support\Facades\File;

class SkillSectionSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = SkillSectionSetting::first();
        return view('admin.skill-setting.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillSectionSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillSectionSetting $skillSectionSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkillSectionSetting $skillSectionSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillSectionSettingRequest $request, $id)
    {
        $model = SkillSectionSetting::first();
        $imagePath = handleUploads('image', $model);
        SkillSectionSetting::updateOrCreate([
            'id' => $id,
        ], [
            'title' => isset($request->title) ? $request->title : "",
            'sub_title' => isset($request->sub_title) ? $request->sub_title : "",
            'image' => isset($imagePath) ? $imagePath : $model->image,
        ]);

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.skill-section-setting.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillSectionSetting $skillSectionSetting)
    {
        //
    }
}

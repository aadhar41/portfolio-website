<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogSectionSetting;
use App\Http\Requests\StoreBlogSectionSettingRequest;
use App\Http\Requests\UpdateBlogSectionSettingRequest;
use App\Models\BlogCategory;

class BlogSectionSettingController extends Controller
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
        $data = BlogSectionSetting::first();
        return view("admin.blog-setting.create", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogSectionSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogSectionSetting $blogSectionSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = BlogCategory::all();
        $data = BlogSectionSetting::findOrFail($id);
        return view("admin.blog-setting.edit", compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogSectionSettingRequest $request, $id)
    {
        $data = BlogSectionSetting::first();
        BlogSectionSetting::updateOrCreate([
            'id' => $id,
        ], [
            'title' => isset($request->title) ? $request->title : "",
            'sub_title' => isset($request->sub_title) ? $request->sub_title : "",
        ]);
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.blog-setting.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use App\Http\Requests\StoreSeoSettingRequest;
use App\Http\Requests\UpdateSeoSettingRequest;

class SeoSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SeoSetting::first();
        return view('admin.seo-setting.index', compact('data'));
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
    public function store(StoreSeoSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SeoSetting $seoSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SeoSetting $seoSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSeoSettingRequest $request, $id)
    {
        $data = SeoSetting::first();
        SeoSetting::updateOrCreate([
            'id' => $id,
        ], [
            'title' => isset($request->title) ? $request->title : "",
            'description' => isset($request->description) ? $request->description : "",
            'keywords' => isset($request->keywords) ? $request->keywords : "",
        ]);

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.seo-setting.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}

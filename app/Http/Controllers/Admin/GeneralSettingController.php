<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Http\Requests\StoreGeneralSettingRequest;
use App\Http\Requests\UpdateGeneralSettingRequest;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GeneralSetting::first();
        return view('admin.setting.general-setting.index', compact('data'));
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
    public function store(StoreGeneralSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeneralSettingRequest $request, $id)
    {
        $model = GeneralSetting::first();
        $logo = handleUploads('logo', $model);
        $footer_logo = handleUploads('footer_logo', $model);
        $favicon = handleUploads('favicon', $model);

        GeneralSetting::updateOrCreate([
            'id' => $id,
        ], [
            'logo' => !empty($logo) ? $logo : $model->logo,
            'footer_logo' => !empty($footer_logo) ? $footer_logo : $model->footer_logo,
            'favicon' => !empty($favicon) ? $favicon : $model->favicon,
        ]);
        toastr()->success('Portfolio Item created successfully.','Success!');
        return redirect()->route('admin.general-setting.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GeneralSetting $generalSetting)
    {
        //
    }
}

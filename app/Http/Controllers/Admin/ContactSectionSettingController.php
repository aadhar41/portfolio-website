<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSectionSetting;
use App\Http\Requests\StoreContactSectionSettingRequest;
use App\Http\Requests\UpdateContactSectionSettingRequest;

class ContactSectionSettingController extends Controller
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
        $data = ContactSectionSetting::first();
        return view("admin.contact-setting.create", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactSectionSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactSectionSetting $contactSectionSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactSectionSetting $contactSectionSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactSectionSettingRequest $request, $id)
    {
        $data = ContactSectionSetting::first();
        ContactSectionSetting::updateOrCreate([
            'id' => $id,
        ], [
            'title' => isset($request->title) ? $request->title : "",
            'sub_title' => isset($request->sub_title) ? $request->sub_title : "",
        ]);
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.contact-section-setting.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactSectionSetting $contactSectionSetting)
    {
        //
    }
}

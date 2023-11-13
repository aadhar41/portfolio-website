<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterContactInfo;
use App\Http\Requests\StoreFooterContactInfoRequest;
use App\Http\Requests\UpdateFooterContactInfoRequest;

class FooterContactInfoController extends Controller
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
        $data = FooterContactInfo::first();
        return view("admin.footer-contact-info.create", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFooterContactInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FooterContactInfo $footerContactInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FooterContactInfo $footerContactInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFooterContactInfoRequest $request, $id)
    {
        FooterContactInfo::updateOrCreate([
            'id' => $id,
        ], [
            'phone' => isset($request->phone) ? $request->phone : "",
            'email' => isset($request->email) ? $request->email : "",
            'address' => isset($request->address) ? $request->address : "",
        ]);
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.footer-contact-info.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FooterContactInfo $footerContactInfo)
    {
        //
    }
}

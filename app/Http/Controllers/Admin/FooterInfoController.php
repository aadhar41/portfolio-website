<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterInfo;
use App\Http\Requests\StoreFooterInfoRequest;
use App\Http\Requests\UpdateFooterInfoRequest;

class FooterInfoController extends Controller
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
        $data = FooterInfo::first();
        return view("admin.footer-info.create", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFooterInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FooterInfo $footerInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FooterInfo $footerInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFooterInfoRequest $request, $id)
    {
        FooterInfo::updateOrCreate([
            'id' => $id,
        ], [
            'info' => isset($request->info) ? $request->info : "",
            'copy_right' => isset($request->copy_right) ? $request->copy_right : "",
            'powered_by' => isset($request->powered_by) ? $request->powered_by : "",
        ]);
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.footer-info.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FooterInfo $footerInfo)
    {
        //
    }
}

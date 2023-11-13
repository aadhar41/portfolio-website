<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterSocialLinkDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterSocialLink;
use App\Http\Requests\StoreFooterSocialLinkRequest;
use App\Http\Requests\UpdateFooterSocialLinkRequest;

class FooterSocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterSocialLinkDataTable $dataTable)
    {
        return $dataTable->render('admin.footer-social-link.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.footer-social-link.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFooterSocialLinkRequest $request)
    {
        $data = new FooterSocialLink();
        $data->icon = !empty($request->icon) ? $request->icon : '' ;
        $data->url = !empty($request->url) ? $request->url : '' ;
        $data->save();
        toastr()->success('Record created successfully.','Success!');
        return redirect()->route('admin.footer-social.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FooterSocialLink $footerSocialLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = FooterSocialLink::findOrFail($id);
        return view("admin.footer-social-link.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFooterSocialLinkRequest $request, $id)
    {
        $data = FooterSocialLink::findOrFail($id);
        $data->icon = !empty($request->icon) ? $request->icon : '' ;
        $data->url = !empty($request->url) ? $request->url : '' ;
        $data->save();
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = FooterSocialLink::findOrFail($id);
        $data->delete();
        toastr()->error('Details deleted successfully.','Success!');
        return redirect()->back();
    }
}

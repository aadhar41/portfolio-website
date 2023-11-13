<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterHelpLinkDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterHelpLink;
use App\Http\Requests\StoreFooterHelpLinkRequest;
use App\Http\Requests\UpdateFooterHelpLinkRequest;

class FooterHelpLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterHelpLinkDataTable $dataTable)
    {
        return $dataTable->render('admin.footer-help-link.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.footer-help-link.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFooterHelpLinkRequest $request)
    {
        $data = new FooterHelpLink();
        $data->name = !empty($request->name) ? $request->name : '' ;
        $data->url = !empty($request->url) ? $request->url : '' ;
        $data->save();
        toastr()->success('Record created successfully.','Success!');
        return redirect()->route('admin.footer-help-link.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FooterHelpLink $footerHelpLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = FooterHelpLink::findOrFail($id);
        return view("admin.footer-help-link.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFooterHelpLinkRequest $request, $id)
    {
        $data = FooterHelpLink::findOrFail($id);
        $data->name = !empty($request->name) ? $request->name : '' ;
        $data->url = !empty($request->url) ? $request->url : '' ;
        $data->save();
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.footer-help-link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = FooterHelpLink::findOrFail($id);
        $data->delete();
        toastr()->error('Details deleted successfully.','Success!');
        return redirect()->route('admin.footer-help-link.index');
    }
}

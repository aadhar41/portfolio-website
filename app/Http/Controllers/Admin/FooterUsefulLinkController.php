<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterUsefulLinkDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterUsefulLink;
use App\Http\Requests\StoreFooterUsefulLinkRequest;
use App\Http\Requests\UpdateFooterUsefulLinkRequest;

class FooterUsefulLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FooterUsefulLinkDataTable $dataTable)
    {
        return $dataTable->render('admin.footer-useful-link.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.footer-useful-link.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFooterUsefulLinkRequest $request)
    {
        $data = new FooterUsefulLink();
        $data->name = !empty($request->name) ? $request->name : '' ;
        $data->url = !empty($request->url) ? $request->url : '' ;
        $data->save();
        toastr()->success('Record created successfully.','Success!');
        return redirect()->route('admin.footer-useful-link.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FooterUsefulLink $footerUsefulLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = FooterUsefulLink::findOrFail($id);
        return view("admin.footer-useful-link.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFooterUsefulLinkRequest $request, $id)
    {
        $data = FooterUsefulLink::findOrFail($id);
        $data->name = !empty($request->name) ? $request->name : '' ;
        $data->url = !empty($request->url) ? $request->url : '' ;
        $data->save();
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.footer-useful-link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = FooterUsefulLink::findOrFail($id);
        $data->delete();
        toastr()->error('Details deleted successfully.','Success!');
        return redirect()->route('admin.footer-useful-link.index');
    }
}

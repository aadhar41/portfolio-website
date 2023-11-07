<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\TyperTitleDataTable;
use App\Http\Controllers\Controller;
use App\Models\TyperTitle;
use App\Http\Requests\StoreTyperTitleRequest;
use App\Http\Requests\UpdateTyperTitleRequest;

class TyperTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TyperTitleDataTable $dataTable)
    {
        return $dataTable->render('admin.typer-title.index');
        // return view("admin.typer-title.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.typer-title.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTyperTitleRequest $request)
    {
        $data = new TyperTitle();
        $data->title = $request->title;
        $data->save();

        toastr()->success('Details stored successfully.','Success!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(TyperTitle $typerTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = TyperTitle::findOrFail($id);
        return view("admin.typer-title.edit", compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTyperTitleRequest $request, $id)
    {
        $data = TyperTitle::findOrFail($id);
        $data->title = $request->title;
        $data->save();

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = TyperTitle::findOrFail($id);
        $data->delete();

        toastr()->error('Details deleted successfully.','Success!');
        return redirect()->back();
    }
}

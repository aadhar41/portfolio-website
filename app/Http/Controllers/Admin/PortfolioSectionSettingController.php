<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PortfolioSectionSettingDataTable;
use App\Http\Controllers\Controller;
use App\Models\PortfolioSectionSetting;
use App\Http\Requests\StorePortfolioSectionSettingRequest;
use App\Http\Requests\UpdatePortfolioSectionSettingRequest;
use App\Models\Category;

class PortfolioSectionSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PortfolioSectionSettingDataTable $dataTable)
    {
        // return $dataTable->render('admin.portfolio-setting.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = PortfolioSectionSetting::first();
        return view("admin.portfolio-setting.create", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioSectionSettingRequest $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(PortfolioSectionSetting $portfolioSectionSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $data = PortfolioSectionSetting::findOrFail($id);
        return view("admin.portfolio-setting.edit", compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioSectionSettingRequest $request, $id)
    {
        $data = PortfolioSectionSetting::first();
        PortfolioSectionSetting::updateOrCreate([
            'id' => $id,
        ], [
            'title' => isset($request->title) ? $request->title : "",
            'sub_title' => isset($request->sub_title) ? $request->sub_title : "",
        ]);

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.portfolio-setting.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = PortfolioSectionSetting::findOrFail($id);
        $data->delete();
        deleteFileIfExists($data->image);

        toastr()->error('Detail deleted successfully.','Success!');
        return redirect()->route('admin.portfolio-setting.index');
    }
}

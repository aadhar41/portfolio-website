<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.portfolio-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.portfolio-category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $service = new Category();
        $service->name = $request->name;
        $service->slug = Str::slug($request->name, '-');
        $service->save();

        toastr()->success('Category created successfully.','Success!');
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view("admin.portfolio-category.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $data = Category::findOrFail($id);
        $data->name = $request->name;
        $data->slug = Str::slug($request->name, '-');
        $data->save();

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();

        toastr()->error('Detail deleted successfully.','Success!');
        return redirect()->back();
    }
}

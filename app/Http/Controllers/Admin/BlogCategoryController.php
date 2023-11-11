<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Http\Requests\StoreBlogCategoryRequest;
use App\Http\Requests\UpdateBlogCategoryRequest;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogCategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.blog-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.blog-category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogCategoryRequest $request)
    {
        $data = new BlogCategory();
        $data->name = $request->name;
        $data->slug = Str::slug($request->name, '-');
        $data->save();
        toastr()->success('Category created successfully.','Success!');
        return redirect()->route('admin.blog-category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = BlogCategory::findOrFail($id);
        return view("admin.blog-category.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogCategoryRequest $request, $id)
    {
        $data = BlogCategory::findOrFail($id);
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
        // $data = BlogCategory::findOrFail($id);
        // $hasItem = PortfolioItem::where('category_id', $data->id)->count();
        // if ($hasItem == 0) {
        //     $data->delete();
        //     $msg = 'Category deleted successfully.';
        //     toastr()->success($msg, 'Success!');
        // } else {
        //     $msg = 'You can not delete this category.';
        //     toastr()->error($msg, 'Error!');
        // }
        // return redirect()->back();
    }
}

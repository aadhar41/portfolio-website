<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogDataTable $dataTable)
    {
        // $blog = Blog::with('category')->first();
        return $dataTable->render('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view("admin.blog.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $imagePath = handleUploads('image');
        $model = new Blog();
        $model->image = !empty($imagePath) ? $imagePath : "" ;
        $model->title = !empty($request->title) ? $request->title : "" ;
        $model->category = !empty($request->category) ? $request->category : "" ;
        $model->description = !empty($request->description) ? $request->description : "" ;
        $model->save();
        toastr()->success('Blog created successfully.','Success!');
        return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = BlogCategory::all();
        $data = Blog::findOrFail($id);
        return view("admin.blog.edit", compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        $model = Blog::findOrFail($id);
        $imagePath = handleUploads('image', $model);
        $model->image = !empty($imagePath) ? $imagePath : $model->image ;
        $model->title = !empty($request->title) ? $request->title : "" ;
        $model->category = !empty($request->category) ? $request->category : "" ;
        $model->description = !empty($request->description) ? $request->description : "" ;
        $model->save();
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Blog::findOrFail($id);
        deleteFileIfExists($data->image);
        $data->delete();
        toastr()->error('Detail deleted successfully.','Success!');
        return redirect()->route('admin.blog.index');
    }
}

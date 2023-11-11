<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PortfolioItemDataTable;
use App\Http\Controllers\Controller;
use App\Models\PortfolioItem;
use App\Http\Requests\StorePortfolioItemRequest;
use App\Http\Requests\UpdatePortfolioItemRequest;
use App\Models\Category;
use Illuminate\Support\Str;

class PortfolioItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PortfolioItemDataTable $dataTable)
    {
        return $dataTable->render('admin.portfolio-item.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.portfolio-item.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioItemRequest $request)
    {
        $imagePath = handleUploads('image');
        $portfolioItem = new PortfolioItem();
        $portfolioItem->image = !empty($imagePath) ? $imagePath : "" ;
        $portfolioItem->title = !empty($request->title) ? $request->title : "" ;
        $portfolioItem->category_id = !empty($request->category_id) ? $request->category_id : "" ;
        $portfolioItem->description = !empty($request->description) ? $request->description : "" ;
        $portfolioItem->client = !empty($request->client) ? $request->client : "" ;
        $portfolioItem->website = !empty($request->website) ? $request->website : "" ;
        $portfolioItem->save();
        toastr()->success('Portfolio Item created successfully.','Success!');
        return redirect()->route('admin.portfolio-item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PortfolioItem $portfolioItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $data = PortfolioItem::findOrFail($id);
        return view("admin.portfolio-item.edit", compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioItemRequest $request, $id)
    {
        $model = PortfolioItem::findOrFail($id);
        $imagePath = handleUploads('image', $model);
        $model->image = !empty($imagePath) ? $imagePath : $model->image ;
        $model->title = !empty($request->title) ? $request->title : "" ;
        $model->description = !empty($request->description) ? $request->description : "" ;
        $model->category_id = !empty($request->category_id) ? $request->category_id : "" ;
        $model->client = !empty($request->client) ? $request->client : "" ;
        $model->website = !empty($request->website) ? $request->website : "" ;
        $model->save();

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.portfolio-item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = PortfolioItem::findOrFail($id);
        $data->delete();
        deleteFileIfExists($data->image);

        toastr()->error('Detail deleted successfully.','Success!');
        return redirect()->route('admin.portfolio-item.index');
    }
}

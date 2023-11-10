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
        // return view("admin.portfolio-item.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioItemRequest $request)
    {
        $imagePath = handleUploads('image');
        $portfolioItem = new PortfolioItem();
        $portfolioItem->image = $imagePath;
        $portfolioItem->title = $request->title;
        $portfolioItem->category_id = $request->category_id;
        $portfolioItem->description = $request->description;
        $portfolioItem->client = $request->client;
        $portfolioItem->website = $request->website;
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
        $data = PortfolioItem::findOrFail($id);
        return view("admin.portfolio-item.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioItemRequest $request, $id)
    {
        $data = PortfolioItem::findOrFail($id);
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
        $data = PortfolioItem::findOrFail($id);
        $data->delete();

        toastr()->error('Detail deleted successfully.','Success!');
        return redirect()->back();
    }
}

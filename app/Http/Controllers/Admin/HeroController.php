<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use App\Http\Requests\StoreHeroRequest;
use App\Http\Requests\UpdateHeroRequest;
use Illuminate\Support\Facades\File;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.hero.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hero = Hero::first();
        return view('admin.hero.create', compact('hero'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        $data = Hero::first();
        if ($request->has('image')) {
            if ($data && File::exists(public_path($data->image))) {
                File::delete(public_path($data->image));
            }
            $image = $request->file('image');
            $imageName = rand() . '_' . $image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);
            $imagePath = "/uploads/" . $imageName;
        }

        Hero::updateOrCreate([
            'id' => $hero->id,
        ], [
            'title' => isset($request->title) ? $request->title : "",
            'sub_title' => isset($request->sub_title) ? $request->sub_title : "",
            'btn_txt' => isset($request->btn_txt) ? $request->btn_txt : "",
            'btn_url' => isset($request->btn_url) ? $request->btn_url : "",
            'image' => isset($imagePath) ? $imagePath : $data->image,
        ]);

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.typer-title.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
    }
}

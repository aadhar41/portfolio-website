<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SkillItemDataTable;
use App\Http\Controllers\Controller;
use App\Models\SkillItem;
use App\Http\Requests\StoreSkillItemRequest;
use App\Http\Requests\UpdateSkillItemRequest;

class SkillItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SkillItemDataTable $dataTable)
    {
        return $dataTable->render('admin.skill-item.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill-item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillItemRequest $request)
    {
        $skill = new SkillItem();
        $skill->name = !empty($request->name) ? $request->name : "" ;
        $skill->percent = !empty($request->percent) ? $request->percent : "" ;
        $skill->save();
        toastr()->success('Skill created successfully.','Success!');
        return redirect()->route('admin.skill-item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillItem $skillItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = SkillItem::findOrFail($id);
        return view("admin.skill-item.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillItemRequest $request, $id)
    {
        $model = SkillItem::findOrFail($id);
        $model->name = !empty($request->name) ? $request->name : "" ;
        $model->percent = !empty($request->percent) ? $request->percent : "" ;
        $model->save();
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.skill-item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = SkillItem::findOrFail($id);
        $data->delete();
        toastr()->error('Detail deleted successfully.','Success!');
        return redirect()->route('admin.skill-item.index');
    }
}

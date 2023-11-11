<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FeedbackDataTable;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FeedbackDataTable $dataTable)
    {
        return $dataTable->render('admin.feedback.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.feedback.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedbackRequest $request)
    {
        $data = new Feedback();
        $data->title = !empty($request->title) ? $request->title : '' ;
        $data->position = !empty($request->position) ? $request->position : '' ;
        $data->description = !empty($request->description) ? $request->description : '' ;
        $data->save();
        toastr()->success('Record created successfully.','Success!');
        return redirect()->route('admin.feedback.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Feedback::findOrFail($id);
        return view("admin.feedback.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeedbackRequest $request, $id)
    {
        $data = Feedback::first();
        Feedback::updateOrCreate([
            'id' => $id,
        ], [
            'title' => !empty($request->title) ? $request->title : "",
            'position' => !empty($request->position) ? $request->position : "",
            'description' => !empty($request->description) ? $request->description : "",
        ]);
        toastr()->success('Details updated successfully.','Success!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Feedback::findOrFail($id);
        $data->delete();
        toastr()->error('Details deleted successfully.','Success!');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeedbackSectionSetting;
use App\Http\Requests\StoreFeedbackSectionSettingRequest;
use App\Http\Requests\UpdateFeedbackSectionSettingRequest;

class FeedbackSectionSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = FeedbackSectionSetting::first();
        return view("admin.feedback-setting.create", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedbackSectionSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FeedbackSectionSetting $feedbackSectionSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = FeedbackSectionSetting::findOrFail($id);
        return view("admin.feedback-setting.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeedbackSectionSettingRequest $request, $id)
    {
        $data = FeedbackSectionSetting::first();
        FeedbackSectionSetting::updateOrCreate([
            'id' => $id,
        ], [
            'title' => isset($request->title) ? $request->title : "",
            'sub_title' => isset($request->sub_title) ? $request->sub_title : "",
        ]);

        toastr()->success('Details updated successfully.','Success!');
        return redirect()->route('admin.feedback-setting.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = FeedbackSectionSetting::findOrFail($id);
        $data->delete();
        toastr()->error('Detail deleted successfully.','Success!');
        return redirect()->route('admin.feedback-setting.index');
    }
}

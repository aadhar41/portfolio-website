<?php

use Illuminate\Support\Facades\File;

function handleUploads($inputName, $model = null) {
    try {
        if (request()->hasFile($inputName)) {
            if ($model && File::exists(public_path($model->{$inputName}))) {
                File::delete(public_path($model->{$inputName}));
            }
            $file = request()->file($inputName);
            $fileName = rand() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/uploads'), $fileName);
            $filePath = "/uploads/" . $fileName;
            return $filePath;
        }
    } catch (\Exception $th) {
        throw $th;
    }
}

function deleteFileIfExists($filePath) {
    try {
        if (File::exists(public_path($filePath))) {
            File::delete(public_path($filePath));
        }
    } catch (\Exception $th) {
        throw $th;
    }
}
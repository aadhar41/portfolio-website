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

function getColor($index) {
    try {
        $colors = ['#558bff', '#fecc90', '#ff885e', '#282828', '#190844', '#9dd3ff'];
        return $colors[$index % count($colors)];
    } catch (\Exception $th) {
        throw $th;
    }
}

function setSidebarActive($route) {
    if (is_array($route)) {
        foreach ($route as $r) {
            if(request()->routeIs($r)) {
                return 'active';
            }
        }
    }
}


<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use App\Models\Service;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    //
    public function index() {
        $hero = Hero::first();
        $typerTitles = TyperTitle::pluck('title');
        $services = Service::pluck('description','name');
        return view('frontend.home', compact('hero', 'typerTitles', 'services'));
    }
}

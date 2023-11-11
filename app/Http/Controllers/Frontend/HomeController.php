<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Feedback;
use App\Models\FeedbackSectionSetting;
use App\Models\Hero;
use App\Models\PortfolioItem;
use App\Models\PortfolioSectionSetting;
use App\Models\Service;
use App\Models\SkillItem;
use App\Models\SkillSectionSetting;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    //
    public function index()
    {
        $hero = Hero::first();
        $typerTitles = TyperTitle::pluck('title');
        $services = Service::pluck('description', 'name');
        $about = About::first(['title', 'description', 'image', 'resume']);
        $portfolioSectionSettings = PortfolioSectionSetting::first(['title', 'sub_title']);
        $categories = Category::all();
        $portfolioItems = PortfolioItem::all();
        $skillSection = SkillSectionSetting::first();
        $skills = SkillItem::all();
        $experience = Experience::first();
        $feedbacks = Feedback::first();
        $feedbackSetting = FeedbackSectionSetting::first();
        $blogCategories = BlogCategory::all();
        $blogs = Blog::latest()->take(5)->get();
        return view('frontend.home', compact(
            'hero',
            'typerTitles',
            'services',
            'about',
            'portfolioSectionSettings',
            'categories',
            'portfolioItems',
            'skillSection',
            'skills',
            'experience',
            'feedbacks',
            'feedbackSetting',
            'blogCategories',
            'blogs',
        ));
    }

    public function showPortfolio($id)
    {
        $portfolioItems = PortfolioItem::findOrFail($id);
        return view('frontend.portfolio-details', compact('portfolioItems'));
    }

}

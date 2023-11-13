<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactFormRequest;
use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSectionSetting;
use App\Models\Category;
use App\Models\ContactSectionSetting;
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
use Illuminate\Support\Facades\Mail;
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
        $feedbacks = Feedback::all();
        $feedbackSetting = FeedbackSectionSetting::first();
        $blogCategories = BlogCategory::all();
        $blogs = Blog::latest()->take(5)->get();
        $blogSectionSetting = BlogSectionSetting::first();
        $contactSectionSetting = ContactSectionSetting::first();
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
            'blogSectionSetting',
            'contactSectionSetting',
        ));
    }

    public function showPortfolio($id)
    {
        $portfolioItems = PortfolioItem::findOrFail($id);
        return view('frontend.portfolio-details', compact('portfolioItems'));
    }

    public function showBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $previousPost = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        $nextPost = Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();
        return view('frontend.blog-details', compact('blog', 'previousPost', 'nextPost'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(3);
        return view('frontend.blog', compact('blogs'));
    }

    public function contact(StoreContactFormRequest $request)
    {
        Mail::send(new ContactMail($request->all()));
        return response()->json(['status' => 'success', 'message' => 'Mail sent successfully.']);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilsbaseController extends Controller
{
    public function home()
    {
        $posts = \Modules\Post\Models\Post::published()->recentlyPublished()->limit(3)->get();
        return view('filsbase.pages.home', compact('posts'));
    }

    public function about()
    {
        return view('filsbase.pages.about');
    }

    public function services()
    {
        return view('filsbase.pages.services');
    }

    public function serviceSingle()
    {
        return view('filsbase.pages.service-single');
    }

    public function blog()
    {
        $posts = \Modules\Post\Models\Post::published()->recentlyPublished()->paginate(9);
        return view('filsbase.pages.blog', compact('posts'));
    }

    public function blogSingle($slug)
    {
        $post = \Modules\Post\Models\Post::published()->where('slug', $slug)->firstOrFail();
        return view('filsbase.pages.blog-single', compact('post'));
    }

    public function caseStudy()
    {
        return view('filsbase.pages.case-study');
    }

    public function caseStudySingle()
    {
        return view('filsbase.pages.case-study-single');
    }

    public function team()
    {
        return view('filsbase.pages.team');
    }

    public function teamSingle()
    {
        return view('filsbase.pages.team-single');
    }

    public function pricing()
    {
        return view('filsbase.pages.pricing');
    }

    public function testimonials()
    {
        return view('filsbase.pages.testimonials');
    }

    public function imageGallery()
    {
        return view('filsbase.pages.image-gallery');
    }

    public function videoGallery()
    {
        return view('filsbase.pages.video-gallery');
    }

    public function faqs()
    {
        return view('filsbase.pages.faqs');
    }

    public function contact()
    {
        return view('filsbase.pages.contact');
    }

    public function notFound()
    {
        return view('filsbase.pages.404');
    }
}

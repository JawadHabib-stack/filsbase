<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = \Modules\Post\Models\Post::published()->recentlyPublished()->limit(3)->get();
        return view('filsbase.pages.home', compact('posts'));
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('filsbase.pages.faqs'); // Using FAQs as a placeholder if Privacy is missing in Filsbase
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function terms()
    {
        return view('filsbase.pages.faqs');
    }
}

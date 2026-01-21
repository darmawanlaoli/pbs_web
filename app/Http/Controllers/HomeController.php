<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimony;
use App\Models\Message;
use App\Models\Gallery;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index()
    {

        $title = "Home Page";
        $testimonies = Testimony::all();

        return view('home', compact('title', 'testimonies'));
    }

    public function kindergarten()
    {
        $title = "Kindergarten Page";
        return view('academic.kindergarten', compact('title'));
    }

    public function primarySchool()
    {
        $title = "Primary School Page";
        return view('academic.primary_school', compact('title'));
    }

    public function highSchool()
    {
        $title = "High School Page";
        return view('academic.high_school', compact('title'));
    }

    public function schoolProfile()
    {
        $title = "School Profile";
        return view('about_us.school_profile', compact('title'));
    }

    public function visionMission()
    {
        $title = "Vision, Mission & Value";
        return view('about_us.vision_mission', compact('title'));
    }

    public function curriculum()
    {
        $title = "Curriculum";
        return view('about_us.curriculum', compact('title'));
    }

    public function flagshipProgram()
    {
        $title = "Flagship Programs";
        return view('flagship_program', compact('title'));
    }

    public function admissions()
    {
        $title = "Admissions";
        return view('admissions', compact('title'));
    }

    public function contactUs()
    {
        $title = "Contact Us";
        return view('contact_us', compact('title'));
    }


    public function storeMessage(Request $request): RedirectResponse
    {
        Message::create([
            'inquiry_type' => $request->input('inquiry_type'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'school_level' => $request->input('school_level'),
            'message' => $request->input('message'),
            'contact_method' => $request->input('contact_method'),
        ]);

        return back()->with('success', 'Your message has been sent successfully!');
    }


    public function testimonials()
    {
        $title = "Parent Testimonials";
        $testimonies = Testimony::all();
        return view('testimonials', compact('title', 'testimonies'));
    }

    public function photoGallery()
    {
        $title = "Photo Gallery";
        $galleries = Gallery::orderBy('id', 'DESC')->get();
        return view('photo_gallery', compact('title', 'galleries'));
    }

    public function articles()
    {
        $title = "Articles";
        $articles = \App\Models\Article::orderBy('id', 'DESC')->get();
        return view('media.articles', compact('title', 'articles'));
    }

    public function articleDetail($slug)
    {
        $title = "Article Detail";
        $article = \App\Models\Article::where('slug', $slug)->firstOrFail();
        $recommendations = \App\Models\Article::where('id', '!=', $article->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        return view('media.article_detail', compact('title', 'article', 'recommendations'));
    }

    public function whatMakesUsDifferent()
    {
        $title = "News & Events";
        return view('what_makes_us_different', compact('title'));
    }
}

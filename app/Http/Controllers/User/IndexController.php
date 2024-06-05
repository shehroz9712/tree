<?php

namespace App\Http\Controllers\User;

use App\Models\Faq;
use App\Models\Service;
use App\Models\Testimonial;

class IndexController extends Controller
{

    public function index()
    {
        $services = Service::get();
        $testimonials = Testimonial::get();
        $faqs = Faq::get();
        return view('index', compact('services', 'testimonials', 'faqs'));
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        $faqs = Faq::get();
        return view('service', compact('faqs'));
    }

    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        return view('blog');
    }

    public function services()
    {
        return view('services');
    }

    public function faqs()
    {
        $faqs = Faq::get();

        return view('faqs', compact('faqs'));
    }
}

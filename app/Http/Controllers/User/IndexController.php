<?php

namespace App\Http\Controllers\User;

use App\Models\Faq;
use App\Models\Page;
use App\Models\Process;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $services = Service::get();
        $processes = Process::where(['type_type' => Page::class, 'type_id' => 1])->get();
        $testimonials = Testimonial::get();
        $faqs = Faq::get();
        return view('index', compact('services', 'testimonials', 'faqs', 'processes'));
    }

    public function about()
    {
        $services = Service::take(4)->get();

        return view('about', compact('services'));
    }

    public function service(Request $request, $slug)
    {
        $faqs = Faq::get();
        $processes = Process::where(['type_type' => Service::class, 'type_id' => 1])->get();
        $service = Service::where('slug', $slug)->first();
        $service_type = ServiceType::where('service_id', $service->id)->get();
        return view('service', compact('service', 'faqs', 'processes', 'service_type'));
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

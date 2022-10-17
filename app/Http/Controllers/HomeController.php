<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Direction;
use App\Models\Doctor;
use App\Models\Gallery;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $directions = Direction::orderBy('id')->get();
        $services = Service::orderBy('id')->get();
        $doctors = Doctor::orderBy('id')->get();
        $reviews = Review::orderBy('id')->get();
        $gallery = Gallery::orderBy('id')->get();
        $contacts = Contact::first();

        return view('home', compact(
            'about',
            'directions',
            'services',
            'doctors',
            'reviews',
            'gallery',
            'contacts',
        ));
    }

    public function changeLanguage(string $lang)
    {
        App::setLocale($lang);
        session()->put('lang', $lang);

        return redirect()->back();
    }

}

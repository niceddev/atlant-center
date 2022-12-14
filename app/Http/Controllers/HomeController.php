<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Direction;
use App\Models\Doctor;
use App\Models\Gallery;
use App\Models\Main;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $main = Main::first();
        $about = About::first();
        $directions = Direction::orderBy('id')->get();
        $services = Service::orderBy('id')->get();
        $doctors = Doctor::orderBy('id')->get();
        $reviews = Review::orderBy('id')->get();
        $gallery = Gallery::orderBy('id')->get();
        $partners = Partner::orderBy('id')->get();
        $contacts = Contact::first();

        return view('home', compact(
            'main',
            'about',
            'directions',
            'services',
            'doctors',
            'reviews',
            'gallery',
            'partners',
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

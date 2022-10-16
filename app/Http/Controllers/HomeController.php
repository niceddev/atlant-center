<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Direction;
use App\Models\Doctor;
use App\Models\Gallery;
use App\Models\Review;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $directions = Direction::get();
        $services = Service::get();
        $doctors = Doctor::get();
        $reviews = Review::get();
        $gallery = Gallery::get();
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
}

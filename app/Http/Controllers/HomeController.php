<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Direction;
use App\Models\Doctor;
use App\Models\Gallery;
use App\Models\Review;
use App\Models\Section;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $sectionsList = [
            'about' => Section::where('slug', 'about')->first(),
            'directions' => Section::where('slug', 'directions')->first(),
            'services' => Section::where('slug', 'services')->first(),
            'doctors' => Section::where('slug', 'doctors')->first(),
            'reviews' => Section::where('slug', 'reviews')->first(),
            'gallery' => Section::where('slug', 'gallery')->first(),
            'contacts' => Section::where('slug', 'contacts')->first(),
        ];

        $directions = Direction::get();
        $services = Service::get();
        $doctors = Doctor::get();
        $reviews = Review::get();
        $gallery = Gallery::get();
        $contacts = Contact::first();

        return view('home', compact(
            'sectionsList',
            'directions',
            'services',
            'doctors',
            'reviews',
            'gallery',
            'contacts',
        ));
    }
}

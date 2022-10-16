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
        $sections = Section::get();
        $directions = Direction::get();
        $services = Service::get();
        $doctors = Doctor::get();
        $reviews = Review::get();
        $gallery = Gallery::get();
        $contacts = Contact::get();

        return view('home', compact(
            'sections',
            'directions',
            'services',
            'doctors',
            'reviews',
            'gallery',
            'contacts',
        ));
    }
}

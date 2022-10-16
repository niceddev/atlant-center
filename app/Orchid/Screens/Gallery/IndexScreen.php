<?php

namespace App\Orchid\Screens\Gallery;

use App\Models\Gallery;
use App\Models\Section;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    private Section $section;

    public function __construct()
    {
        $this->section = Section::where('slug', 'gallery')->first();
    }

    public function name(): ?string
    {
        return $this->section->title;
    }

    public function query(): iterable
    {
        return [
            'gallery' => Gallery::get()
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Add'))
                ->href(route('platform.gallery.create')),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::view('panel.gallery')
        ];
    }

}

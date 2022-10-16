<?php

namespace App\Orchid\Screens\Gallery;

use App\Models\Gallery;
use App\Models\Section;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    private Section $gallery;

    public function __construct()
    {
        $this->gallery = Section::where('slug', 'gallery')->first();
    }

    public function name(): ?string
    {
        return $this->gallery->title;
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

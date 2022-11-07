<?php

namespace App\Orchid\Screens\Partners;

use App\Models\Partner;
use App\Models\Section;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    private Section $section;

    public function __construct()
    {
        $this->section = Section::where('slug', 'partners')->first();
    }

    public function name(): ?string
    {
        return $this->section->title;
    }

    public function query(): iterable
    {
        return [
            'partners' => Partner::get()
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Add'))
                ->href(route('platform.partners.create')),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::view('panel.partners')
        ];
    }
}

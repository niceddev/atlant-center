<?php

namespace App\Orchid\Screens\Directions;

use App\Models\Direction;
use App\Models\Section;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    private Section $section;

    public function __construct()
    {
        $this->section = Section::where('slug', 'directions')->first();
    }

    public function name(): ?string
    {
        return $this->section->title;
    }

    public function query(): iterable
    {
        return [
            'directions' => Direction::get()
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Add'))
                ->href(route('platform.directions.create')),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::view('panel.directions')
        ];
    }
}

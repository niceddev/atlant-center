<?php

namespace App\Orchid\Screens\Sections;

use App\Models\Direction;
use App\Models\Section;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    public function name(): ?string
    {
        return 'Секции';
    }

    public function query(): iterable
    {
        return [
            'sections' => Section::get()
        ];
    }

    public function commandBar(): array
    {
        return [];
    }

    public function layout(): iterable
    {
        return [
            Layout::view('panel.index')
        ];
    }
}

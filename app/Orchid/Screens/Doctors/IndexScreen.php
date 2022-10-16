<?php

namespace App\Orchid\Screens\Doctors;

use App\Models\Doctor;
use App\Models\Section;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class IndexScreen extends Screen
{
    private Section $doctors;

    public function __construct()
    {
        $this->doctors = Section::where('slug', 'doctors')->first();
    }

    public function name(): ?string
    {
        return $this->doctors->title;
    }

    public function query(): iterable
    {
        return [
            'doctors' => Doctor::get()
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Add'))
                ->href(route('platform.doctors.create')),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::view('panel.doctors')
        ];
    }
}

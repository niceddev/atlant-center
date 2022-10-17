<?php

namespace App\Orchid\Screens\Doctors;

use App\Models\Doctor;
use App\Models\Section;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Picture;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;

class CreateScreen extends TranslationsScreen
{
    public function name(): ?string
    {
        return Section::where('slug', 'doctors')->first()->title;
    }

    public function query(): iterable
    {
        return [];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Picture::make('doctors.photo')
                    ->targetUrl()
                    ->title('Фото врача'),
            ])
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('doctors.full_name')
                ->placeholder('ФИО врача')
                ->title('Введите ФИО врача')
                ->required(),
            Input::make('doctors.speciality')
                ->placeholder('Введите специальность врача')
                ->title('Специальность врача'),
            Quill::make('doctors.graphic')
                ->toolbar(['text', 'color', 'header', 'list', 'format'])
                ->placeholder('График')
                ->title('График врача'),
            Quill::make('doctors.biography')
                ->toolbar(['text', 'color', 'header', 'list', 'format'])
                ->placeholder('Введите биографию врача')
                ->title('Биография врача')
        ];
    }

    public function save(Request $request)
    {
        Doctor::create($request->input('doctors'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.doctors.index');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->href(route('platform.doctors.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}


<?php

namespace App\Orchid\Screens\Doctors;

use App\Models\Doctor;
use App\Models\Section;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class EditScreen extends TranslationsScreen
{
    private Doctor $doctor;

    public function name(): ?string
    {
        return Section::where('slug', 'directions')->first()->title;
    }

    public function query(Doctor $doctor): iterable
    {
        $this->doctor = $doctor;

        return [
            'doctor' => $this->doctor->toArray()
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('doctor.full_name')
                ->placeholder('ФИО врача')
                ->title('Введите ФИО врача')
                ->required(),
            Input::make('doctor.speciality')
                ->placeholder('Введите специальность врача')
                ->title('Специальность врача'),
            Quill::make('doctor.graphic')
                ->toolbar(['text', 'color', 'header', 'list', 'format'])
                ->placeholder('График')
                ->title('График врача'),
            Quill::make('doctor.biography')
                ->toolbar(['text', 'color', 'header', 'list', 'format'])
                ->placeholder('Введите биографию врача')
                ->title('Биография врача')
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Picture::make('doctor.photo')
                    ->storage('public')
                    ->targetUrl()
                    ->title('Фото врача'),
            ])
        ];
    }

    public function save(Doctor $doctor, Request $request)
    {
        $doctor->update($request->input('doctor'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.doctors.index');
    }

    public function remove(Doctor $doctor)
    {
        $doctor->delete();

        Toast::info('Удалено!');

        return redirect()->route('platform.doctors.index');
    }

    public function commandBar(): array
    {
        return [
            Button::make(__('Remove'))
                ->method('remove'),
            Link::make(__('Cancel'))
                ->href(route('platform.doctors.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}


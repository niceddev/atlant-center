<?php

namespace App\Orchid\Screens\Contacts;

use App\Models\Contact;
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
    public function name(): ?string
    {
        return Section::where('slug', 'directions')->first()->title;
    }

    public function query(Contact $contact): iterable
    {
        return [
            'contact' => $contact->toArray()
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
                ->placeholder('График')
                ->title('График врача'),
            Quill::make('doctor.biography')
                ->placeholder('Введите биографию врача')
                ->title('Биография врача')
        ];
    }

    public function save(Contact $contact, Request $request)
    {
        $contact->update($request->input('contact'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.doctors.index');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->href(route('platform.contacts.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}


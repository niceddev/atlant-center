<?php

namespace App\Orchid\Screens\Contacts;

use App\Models\Contact;
use App\Models\Section;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class EditScreen extends TranslationsScreen
{
    public function name(): ?string
    {
        return Section::where('slug', 'contacts')->first()->title;
    }

    public function query(): iterable
    {
        return [
            'contacts' => Contact::first()->toArray()
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            TextArea::make('contacts.address')
                ->placeholder('Введите адрес')
                ->title('Адрес')
                ->required(),
            Quill::make('contacts.graphic')
                ->placeholder('Введите график работы')
                ->title('График работы'),
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Input::make('contacts.phone_number')
                    ->placeholder('Введите номер телефона')
                    ->title('Номер телефона'),
                Input::make('contacts.whatsapp_number')
                    ->placeholder('Введите номер телефона')
                    ->title('Номер телефона Whatsapp'),
                Input::make('contacts.email')
                    ->placeholder('Введите почту')
                    ->type('email')
                    ->title('Введите почту'),
                Input::make('contacts.instagram_link')
                    ->placeholder('Введите ссылку на инстаграм')
                    ->type('url')
                    ->title('Введите ссылку инстаграмма'),
            ])
        ];
    }

    public function save(Request $request)
    {
        Contact::first()
            ->update($request->input('contacts'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.contacts.edit');
    }

    public function commandBar(): array
    {
        return [
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}


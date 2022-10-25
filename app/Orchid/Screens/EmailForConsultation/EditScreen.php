<?php

namespace App\Orchid\Screens\EmailForConsultation;

use App\Models\EmailForConsultation;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;

class EditScreen extends Screen
{
    public function name(): ?string
    {
        return 'Email';
    }

    public function query(): iterable
    {
        return [
            'email' => EmailForConsultation::first()->toArray()
        ];
    }

    public function save(Request $request)
    {
        EmailForConsultation::first()
            ->update($request->input('email'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.email_for_consultation.edit');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->href(route('platform.email_for_consultation.edit')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('email.email')
                    ->placeholder('Введите email')
                    ->title('Email для обратной связи')
                    ->required(),
            ])
        ];
    }
}

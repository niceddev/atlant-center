<?php

namespace App\Orchid\Screens\Main;

use App\Models\Main;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use App\Orchid\Screens\Abstraction\TranslationsScreen;

class EditScreen extends TranslationsScreen
{
    public function name(): ?string
    {
        return 'Главная';
    }

    public function query(): iterable
    {
        return [
            'main' => Main::first()->toArray(),
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('main.title')
                ->placeholder('Введите заголовок')
                ->title('Заголовок')
                ->required(),
            Quill::make('main.description')
                ->toolbar(['text', 'color', 'header', 'list', 'format'])
                ->placeholder('Введите описание')
                ->title('Описание')
                ->required(),
            Picture::make('main.image_path')
                ->storage('public')
                ->targetRelativeUrl()
                ->title('Картинка'),
            Input::make('main.button_title')
                ->placeholder('Введите текст кнопки')
                ->title('Текст кнопки')
                ->required(),
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Input::make('main.video_link')
                    ->placeholder('Введите ссылку на видео')
                    ->type('url')
                    ->title('Введите ссылку видео'),
            ])
        ];
    }


    public function save(Request $request)
    {
        Main::first()->update($request->input('main'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.main.edit');
    }

    public function commandBar(): array
    {
        return [
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}

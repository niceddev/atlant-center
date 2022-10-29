<?php

namespace App\Orchid\Screens\Services;

use App\Models\Section;
use App\Models\Service;
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
        return Section::where('slug', 'services')->first()->title;
    }

    public function query(): iterable
    {
        return [];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('services.title')
                ->placeholder('Введите заголовок')
                ->title('Заголовок')
                ->required(),
            Quill::make('services.content')
                ->placeholder('Введите описание')
                ->title('Описание')
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Picture::make('services.banner')
                ->storage('public')
                ->targetUrl()
                ->title('Баннер'),
            ])
        ];
    }

    public function save(Request $request)
    {
        Service::create($request->input('services'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.services.index');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->href(route('platform.services.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}


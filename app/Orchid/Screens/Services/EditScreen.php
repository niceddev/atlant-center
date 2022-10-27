<?php

namespace App\Orchid\Screens\Services;

use App\Models\Section;
use App\Models\Service;
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
    private Service $service;

    public function name(): ?string
    {
        return Section::where('slug', 'services')->first()->title;
    }

    public function query(Service $service): iterable
    {
        $this->service = $service;

        return [
            'service' => $this->service->toArray()
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('service.title')
                ->placeholder('Введите заголовок')
                ->title('Заголовок')
                ->required(),
            Quill::make('service.content')
                ->placeholder('Введите описание')
                ->title('Описание')
        ];
    }

    protected function singleLanguageFields(): array
    {
        return [
            Layout::rows([
                Picture::make('service.banner')
                    ->targetUrl()
                    ->title('Баннер'),
            ])
        ];
    }

    public function save(Service $service, Request $request)
    {
        $service->update($request->input('service'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.services.index');
    }

    public function remove(Service $service)
    {
        $service->delete();

        Toast::info('Удалено!');

        return redirect()->route('platform.services.index');
    }

    public function commandBar(): array
    {
        return [
            Button::make(__('Remove'))
                ->method('remove'),
            Link::make(__('Cancel'))
                ->href(route('platform.services.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}


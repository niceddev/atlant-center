<?php

namespace App\Orchid\Screens\About;

use App\Models\About;
use App\Models\Section;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;
use App\Orchid\Screens\Abstraction\TranslationsScreen;

class EditScreen extends TranslationsScreen
{
    private Section $section;

    public function __construct()
    {
        $this->section = Section::where('slug', 'about')->first();
    }

    public function name(): ?string
    {
        return $this->section->title;
    }

    public function query(): iterable
    {
        return [
            'about' => About::first()->toArray(),
            'section' => $this->section->toArray(),
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('section.title')
                ->placeholder('Введите заголовок')
                ->title('Заголовок')
                ->required(),
            Quill::make('about.description')
                ->toolbar(['text', 'color', 'header', 'list', 'format'])
                ->placeholder('Введите описание')
                ->title('Описание'),
            Input::make('about.list_title')
                ->title('Заголовок списка'),
            Quill::make('about.list')
                ->toolbar(['text', 'color', 'header', 'list', 'format'])
                ->title('Список'),
        ];
    }

    public function save(Request $request)
    {
        $this->section->update($request->input('section'));
        About::first()->update($request->input('about'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.about.edit');
    }

    public function commandBar(): array
    {
        return [
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}

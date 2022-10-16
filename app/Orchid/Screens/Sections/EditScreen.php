<?php

namespace App\Orchid\Screens\Sections;

use App\Models\Section;
use App\Orchid\Screens\Abstraction\TranslationsScreen;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Toast;

class EditScreen extends TranslationsScreen
{
    public function name(): ?string
    {
        return 'Секции';
    }

    public function query(Section $section): iterable
    {
        return [
            'section' => $section->toArray()
        ];
    }

    protected function multiLanguageFields(): array
    {
        return [
            Input::make('section.title')
                ->placeholder('Введите заголовок')
                ->title('Заголовок')
                ->required(),
        ];
    }

    public function save(Section $section, Request $request)
    {
        $section->update($request->input('section'));

        Toast::info('Успешно сохранено!');

        return redirect()->route('platform.sections.index');
    }

    public function commandBar(): array
    {
        return [
            Link::make(__('Cancel'))
                ->href(route('platform.sections.index')),
            Button::make(__('Save'))
                ->method('save'),
        ];
    }

}


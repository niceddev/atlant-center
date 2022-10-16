<?php

namespace App\Orchid;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make('О нас')
                ->icon('info')
                ->route('platform.about.edit'),
            Menu::make('Направления')
                ->icon('directions')
                ->route('platform.directions.index'),
            Menu::make('Услуги')
                ->icon('list')
                ->route('platform.services.index'),
            Menu::make('Врачи')
                ->icon('people')
                ->route('platform.doctors.index'),
            Menu::make('Отзывы')
                ->icon('bubble')
                ->route('platform.reviews.index'),
            Menu::make('Галерея')
                ->icon('picture')
                ->route('platform.gallery.index'),
            Menu::make('Контакты')
                ->icon('pointer')
                ->route('platform.contacts.edit'),
            Menu::make('Секции')
                ->icon('menu')
                ->route('platform.sections.index'),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [];
    }
}

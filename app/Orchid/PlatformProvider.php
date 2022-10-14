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
                ->icon('monitor')
                ->route('platform.about.index'),
            Menu::make('Направления')
                ->icon('monitor')
                ->route('platform.directions.index'),
            Menu::make('Услуги')
                ->icon('monitor')
                ->route('platform.services.index'),
            Menu::make('Врачи')
                ->icon('monitor')
                ->route('platform.doctors.index'),
            Menu::make('Отзывы')
                ->icon('monitor')
                ->route('platform.reviews.index'),
            Menu::make('Галлерея')
                ->icon('monitor')
                ->route('platform.gallery.index'),
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

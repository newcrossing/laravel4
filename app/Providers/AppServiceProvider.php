<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
        if (env('APP_ENV') === 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Carbon::setLocale('ru');
        Carbon::now()->locale('ru_RU');
        Carbon::now()->settings([
                'locale' => 'ru_RU',
                'timezone' => 'Europe/Paris',
        ]);
        setlocale(LC_TIME, 'ru');
        date_default_timezone_set('CET');
        Carbon::setLocale('ru');
        $Carbone = Carbon::now()->locale('ru_RU');
        setlocale(LC_TIME, 'ru_RU.UTF-8');


        $verticalMenuJson = file_get_contents(base_path('resources/admin/data/menus/vertical-menu.json'));
        $verticalMenuData = json_decode($verticalMenuJson);
        $horizontalMenuJson = file_get_contents(base_path('resources/admin/data/menus/horizontal-menu.json'));
        $horizontalMenuData = json_decode($horizontalMenuJson);
        $verticalMenuBoxiconsJson = file_get_contents(base_path('resources/admin/data/menus/vertical-menu-boxicons.json'));
        $verticalMenuBoxiconsData = json_decode($verticalMenuBoxiconsJson);
        // $verticalOverlayMenu = file_get_contents(base_path('resources/data/menus/vertical-overlay-menu.json'));
        // $verticalOverlayMenuData = json_decode($verticalOverlayMenu);

        // share all menuData to all the views
        \View::share('menuData',[$verticalMenuData, $horizontalMenuData,$verticalMenuBoxiconsData]);
        \View::share('Carbone',$Carbone);



        Relation::morphMap([
            'post' => 'App\Models\Post',
            'doc' => 'App\Models\Doc',
        ]);
    }
}

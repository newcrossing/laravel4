<?php

namespace App\Providers;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

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



        Relation::morphMap([
            'post' => 'App\Models\Post',
        ]);
    }
}

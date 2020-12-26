<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // DBの文字数の設定
        // Herokuではvarchar型の文字数はデフォルトの255では大きすぎるため191に設定
        Schema::defaultStringLength(191);

        // アプリをhttpsに対応させる。本番環境の場合にhttpsを強制する
        // if (\App::environment('production')) {
        //     \URL::forceScheme('https');
        // }
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use App\Models\Backend\Setting;

class SettingsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('settings', function(){
            return new Setting();
        });
        $loader = AliasLoader::getInstance();
        $loader->alias('Setting',Setting::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if(!App::runningInConsole() && count(Schema::getColumnListing('settings'))){
            $settings = Setting::all();
            foreach ($settings as $setting) {
                Config::set('settings.'.$setting->name,$setting->value);
            }
        }
    }
}

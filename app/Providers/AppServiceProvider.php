<?php

namespace App\Providers;
use View;
use App\Groupcat;
use App\Church;
use App\Music;
use App\User;
use App\Usertwin;
use App\Albumcat;
use App\Userplaylist;
use Auth;
use DB;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
public function boot()
{
Schema::defaultStringLength(191);

View::composer('*', function($view)
    {
        $view->with('groupcats', Groupcat::orderBy('updated_at','desc')->where('status','visible')->get());
        $view->with('churches', Church::orderBy('updated_at','desc')->where('status','visible')->get());
        $view->with('music', Music::orderBy('updated_at','desc')->where('status','visible')->get());
        $view->with('users', User::orderBy('updated_at','desc')->where('status','visible')->get());
        $view->with('usertwinadds', User::orderBy('updated_at','desc')->where('status','visible')->get());
        $view->with('countries', DB::table('countries')->get());
        $view->with('albumcats', Albumcat::all());
    });
}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\slide;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::Share('slide', slide::all());
    }
    // nếu view share  thì e dùng ở đây, dùng ở nó k hiểu, kiểu như rứa
    //ảnh e tự tuyền hỉ, à dạ cho em hỏi cái nữa với anh, bên cái tìm kiếm sự kiện á anh 

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

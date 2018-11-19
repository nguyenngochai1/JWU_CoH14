<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\slide;
use Cart;
use Session;

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
        View::Share('content', Cart::getContent());
 /*       view()->composer('header',function($view){
            if(Session::has('cart')){
                $oldCart= Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
            }

        });*/
  
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

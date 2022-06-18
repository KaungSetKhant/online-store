<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Order;
// use App\Models\Report;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
    // recursion(1);

    // echo getGreeting();
    // $order = new Order;
    // echo $order->balanceItem();
    // $report = new Report();
//    echo $report->reduceQty()."</br>";

//    echo $report->reduceBalancing()."</br>";
 
//    echo $report->balanceQty()."</br>";
  
//    echo Report::CONSTANT."</br>";
  
//    echo Report::$my_static."</br>";
   
   

//    $a = new Hello();
//    echo $a->sayHello();


Route::prefix('admin')->group(function(){
    Route::get('foo',function(){
        return 'Foo Page';
    });
    Route::redirect('bar','foo');
    Route::view('landing','order-detail');
    // get method caring id or parameter//
    Route::get('user/{user_id}', function($user_id = '') {
        return $user_id;
    });
    // optional (?)//
    Route::get('user/{user_id?}', function($user_id = 'null') {
     return $user_id;
    })->name('user');
});

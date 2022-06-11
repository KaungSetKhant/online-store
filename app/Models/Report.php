<?php
namespace App\Models;
use App\Models\Order;
use App\Traits\Balancing;
use App\Interfaces\B;
class Report implements B{
    use Balancing;
   
    public function __construct(){
       dump('This is Constructor.');
    }

    const CONSTANT = 'constant value';
    
    public static $my_static = 'static var';

    public static function balanceQty(){
        return "Balance Quantity";
    }
    // public function reduceQty(){
    //     return $this -> balanceItem();
    // }

    public function callA(){

    }
    public function callB(){
        
    }
}
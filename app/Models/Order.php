<?php 
namespace App\Models;
class Order{
    protected $order_id=1;
    private function confirmOrder(){
    return "Confirm Order";
    }
    public function balanceItem(){
        return $this->confirmOrder();
    }
}
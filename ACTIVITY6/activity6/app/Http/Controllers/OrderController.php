<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer($id , $name , $address)
    {
        return view('customer', compact('id','name','address'));
    }

    public function item($itemNo, $name,$price){
        return view('item', compact('itemNo', 'name','price'));
    }

    public function order($id,$name, $orderNo , $date){
        return view('order', compact('id','name','orderNo','date'));
    }

    public function orderdetails($transNo,$orderNo,$itemId,$name,$price,$qty){
        return view('orderDetails',compact('transNo','orderNo','itemId','name','price','qty'));
    }

}

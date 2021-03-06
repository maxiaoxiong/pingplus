<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrdersController extends Controller
{
    public function handleOrder(Request $request)
    {
//        \Pingpp\Pingpp::setApiKey(env('API_KEY'));
//
//        $charge = \Pingpp\Charge::create(
//            array(
//                'order_no' => time().rand(1000,9999),
//                'amount'   => '10000',
//                'app'      => ['id'=>env('APP_C_KEY')],
//                'channel'  => 'alipay',
//                'currency' => 'cny',
//                'client_ip' => $request->ip(),
//                'subject'  => 'pay success',
//                'body'     => 'pay OK!',
////                'extra'    => ['success_url'=>'http://ping.app/charge/paid']
//            )
//        );
//
//        return view('orders.charge',compact('charge'));
        dd('ss');
    }

    public function overOrder()
    {
    dd('sss');
    }

    public function getTodayOrders()
    {
        $orders = Order::where('created_at','>=',Carbon::today())->paginate(10);
        return view('orders.today',compact('orders'));
    }

    public function getWeekOrders()
    {
        $orders = Order::where('created_at','>=',Carbon::createFromDate()->startOfWeek())->paginate(10);
        return view('orders.week',compact('orders'));
    }

    public function getHistoryOrders()
    {
        $orders = Order::paginate(10);
        return view('orders.history',compact('orders'));
    }
}

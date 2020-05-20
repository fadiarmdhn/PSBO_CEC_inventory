<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use App\Order;
use App\Order_detail;
use App\User;
use App\Cost;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $products = Product::all();
        $order_details = Order_detail::all();
        $costs = Cost::all();

        $product = Product::count();
        $order = Order::count();
        $user = User::count();

        $customer = [];
        if ($orders->count() > 0) {
            foreach ($orders as $row) {
                $customer[] = $row->customer->nis;
            }
        }
        
        $total = 0;
        if ($orders->count() > 0) {
            $sub_total = $orders->pluck('total')->all();
            $total = array_sum($sub_total);
        }
        
        $profits = array();
        $profit = 0;
        foreach ($products as $row) {
            $profits[$row->name] = 0;
        }
        foreach ($order_details as $row) {
            $profits[$row->product->name] += ($row->product->price - $row->product->purchase) * $row->qty;
        }
        foreach ($products as $row) {
            $profit += $profits[$row->name];
        }

        $operational = 0;
        if ($costs->count() > 0) {
            $sub_total = $costs->pluck('amount')->all();
            $operational = array_sum($sub_total);
        }
        
        $net = $profit - $operational;

        return view('home', [
            'product' => $product,
            'order' => $order,
            'customer' => count(array_unique($customer)),
            'user' => $user,
            'total' => $total,
            'profit' => $profit,
            'operational' => $operational,
            'net' => $net
        ]);
    }

    public function getChart()
    {
        $start = Carbon::now()->subWeek()->addDay()->format('Y-m-d') . ' 00:00:01';
        $end = Carbon::now()->format('Y-m-d') . ' 23:59:00';
        
        $order = Order::select(DB::raw('date(created_at) as order_date'), DB::raw('count(*) as total_order'))
            ->whereBetween('created_at', [$start, $end])
            ->groupBy('created_at')    
            ->get()->pluck('total_order', 'order_date')->all();

        for ($i = Carbon::now()->subWeek()->addDay(); $i <= Carbon::now(); $i->addDay()) {
            if (array_key_exists($i->format('Y-m-d'), $order)) {
                $data[$i->format('Y-m-d')] = $order[$i->format('Y-m-d')];
            } else {
                $data[$i->format('Y-m-d')] = 0;
            }
        }
        return response()->json($data);
    }
}

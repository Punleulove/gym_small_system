<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data_ui = DB::table('products')
            ->select('products.*', 'users.name as username')
            ->join('users', 'products.user_id', '=', 'users.id')
            ->orderBy('duration')->limit(3)->get();

        $data = DB::table('memberships')
            ->select('memberships.*', 'products.type_name as pname', 'products.price as price', 'products.Duration', 'users.name as userName')
            ->join('products', 'memberships.membership_type', '=', 'products.id')
            ->join('users', 'memberships.user_id', '=', 'users.id')
            ->orderByDesc('id')
            ->get();
         $total = $data->sum('price');
         $member = $data->where('name')->count();

        $product = DB::table('products')->get();
        $type = $product->where('id')->count();

        $user = DB::table('users')->get();
        $users=$user->where('id')->count();



        return view('Backend.Home', compact('data_ui','total','member','type','users'));
    }
}

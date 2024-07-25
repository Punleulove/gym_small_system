<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function Search(request $request)
    {
        $search = $request->search_code;
        $rand_code = DB::table('memberships')
            ->select('memberships.*', 'products.type_name as pname', 'products.price as price', 'users.name as userName')
            ->join('products', 'memberships.membership_type', '=', 'products.id')
            ->join('users', 'memberships.user_id', '=', 'users.id')
            ->where('rand_code',   $search)
            ->get();
        return view('Backend.search', compact('rand_code'));
    }
    public function RpSearch(request $request)
    {
        $search = $request->rp_search;
        $rp_search = DB::table('memberships')
            ->select('memberships.*', 'products.type_name as pname', 'products.price as price', 'users.name as userName')
            ->join('products', 'memberships.membership_type', '=', 'products.id')
            ->join('users', 'memberships.user_id', '=', 'users.id')
            ->where('join_date',  $search)
            ->get();
        $total = $rp_search->sum('price');
        $member = $rp_search->where('name')->count();
        return view('Backend.report', compact('rp_search', 'total', 'member','search'));
    }
}

<?php

namespace App\Http\Controllers;

date_default_timezone_set("Asia/Phnom_penh");

use Exception;
use Carbon\Carbon;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function OpenAddproduct()
    {
        return view('Backend.add-product');
    }

    public function Addproduct(Request $request)
    {
        $username = $request->name;
        $price = $request->price;
        $discount = $request->discount;
        $description = $request->description;
        $duretion = $request->Duration;
        $user_id = Auth::user()->id;




        try {
            DB::table('products')->insert([
                'type_name' => $username,
                'description' => $description,
                'price' => $price,
                'discount' => $discount,
                'Duration' => $duretion,
                'user_id' => $user_id,
                'created_at' => date('d-m-y-h-i-s'),
            ]);
            return redirect('/viewProducts')->with('success', '');
        } catch (Exception $e) {
            return redirect('/addproduct')->with('unsuccess', '');
        }
    }
    public function ViewProducts()
    {
        $data = DB::table('products')
            ->select('products.*', 'users.name as username')
            ->join('users', 'products.user_id', '=', 'users.id')
            ->orderByDesc('id')->get();
        return view('Backend.listproducts', compact('data'));
    }

    public function OpenUpdateProduct($id)
    {
        $data = DB::table('products')->where('id', $id)->first();;
        // $data = Products::select('*')->where('id', $id)->first();
        return view('Backend.update_product', compact('data'));
    }

    public function UpdateProduct(Request $request)
    {
        $update_id = $request->update_id;
        $username = $request->name;
        $price = $request->price;
        $discount = $request->discount;
        $description = $request->description;
        $duretion = $request->Duration;
        $user_id = Auth::user()->id;

        // try {
        DB::table('products')->where('id', $update_id)->update([
            'type_name' => $username,
            'description' => $description,
            'price' => $price,
            'discount' => $discount,
            'Duration' => $duretion,
            'created_at' => date('d-m-y-h-i-s'),
        ]);
        return redirect('/viewProducts')->with('upsuccess', '');
        // } catch (Exception $e) {
        //     return redirect('/update-product')->with('unsuccess', '');
        // }
    }

    public function Delete_product(Request $request)
    {
        $remove_id = $request->remove_id;
        $check = DB::table('products')->where('id', $remove_id)->delete();
        return redirect('/viewProducts')->with('deletesuccess', '');
    }
}

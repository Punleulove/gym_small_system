<?php

namespace App\Http\Controllers;

use DateTime;
use Exception;
use DateInterval;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function OpenAdd()
    {
        $type = DB::table('products')->get();
        return view('Backend.addmembership', compact('type'));
    }

    public function AddMembership(Request $request)
    {



        $user = Auth::user()->id;
        $name = $request->name;
        $gender = $request->gender;
        $phone_num = $request->phonenumber;
        $start_date = $request->start_date;
        $type_member = $request->type_member;
        $end_date = $request->end_date;
       $fdate = new DateTime($start_date);
       $edate =new DateTime($end_date);
       $interval =$fdate ->diff($edate);
       $day = $interval->format('%a');


        // $daysBetween = getDaysBetweenDates($start_date, $end_date);
        $rand_code = mt_rand(1, 100000);
        DB::table('memberships')->insert([
            'name' => $name,
            'gender' => $gender,
            'phonenumber' => $phone_num,
            'join_date' => $start_date,
            'end_date' => $end_date,
            'interval' => $day,
            'membership_type' => $type_member,
            'user_id' => $user,
            'rand_code' => $rand_code,
        ]);
        return  redirect('/viewmebership')->with('success', '');
    }
    public function ViewMembership(Request $request)
    {
        $data = DB::table('memberships')
            ->select('memberships.*', 'products.type_name as pname', 'products.price as price','products.Duration', 'users.name as userName')
            ->join('products', 'memberships.membership_type', '=', 'products.id')
            ->join('users', 'memberships.user_id', '=', 'users.id')
            ->orderByDesc('id')
            ->get();


        return view('Backend.listmembership', compact('data'));
    }

    public function Delete_membership(Request $request)
    {
        $remove_id = $request->remove_id;
        $check = DB::table('memberships')->where('id', $remove_id)->delete();
        return redirect('/viewmebership')->with('deletesuccess', '');
    }

    public function Print($id)
    {
        // try {
        $invoice = DB::table('memberships')
            ->select('memberships.*', 'products.type_name as pname', 'products.price as price', 'users.name as userName')
            ->join('products', 'memberships.membership_type', '=', 'products.id')
            ->join('users', 'memberships.user_id', '=', 'users.id')
            ->where('memberships.id', $id)
            ->first();
        return view('Backend.invoice', compact('invoice'));
        // } catch (Exception $e) {
        //     // Handle invoice not found scenario
        //     return redirect('/viewmebership')->with('error', 'Invoice not found'); // Example redirect and error message
        // }
    }



}

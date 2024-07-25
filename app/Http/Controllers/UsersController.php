<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function OpenLogin()
    {
        return view('Backend.login');
    }
    public function Login(Request $request)
    {
        if (
            Auth::attempt([
                // 'name' => $request->name_phone,
                'name' => $request->name_phone,
                'password' => $request->password,
            ])
        ) {
            return redirect('/')->with('success');
        } else if (
            Auth::attempt([
                'phonenumber' => $request->name_phone,
                'password' => $request->password,
            ])
        ) {
            return redirect('/')->with('success');
        } else {
            return redirect('/login')->with('unsuccess', '');
        }
    }



    public function OpenRegister()
    {
        return view('Backend.register');
    }
    public function Register(Request $request)
    {
        $username = $request->name;
        $phonenumber = $request->phonenumber;
        $password = Hash::make($request->password);
        $profile = $request->profile;
        if ($profile) {
            $new_prolfile = date('dmyhis') . '_' . $profile->getClientOriginalName();
            $path = 'images';
            $profile->move($path, $new_prolfile);
        }

        try {
            DB::table('users')->insert([
                'name' => $username,
                'phonenumber' => $phonenumber,
                'password' => $password,
                'profile' =>$new_prolfile,
                'created_at' => date('Y-m-d H:i'),

            ]);
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/register')->with('unsuccess', $e->getMessage());
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function Viewusers (){
        $data = DB::table('users')->get();

        return view('Backend.listuser',compact('data'));
    }

   public function DeleteUser(Request $request){
        $remove_id = $request->remove_id;
        $check = DB::table('users')->where('id', $remove_id)->delete();
        return redirect('/viewusers')->with('deletesuccess', '');
   }
}

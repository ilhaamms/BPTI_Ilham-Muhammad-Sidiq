<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\File;
use Storage;

class LoginController extends Controller
{
    function pageLogin(){
        return view('login');
    }
    
    function signin(){
        return view('signin');
    }

    public function university(){
        return view('university');
    }

    public function registrasi(Request $request){

        $cryptpassword = Hash::make($request->password);
        $split = str_split($cryptpassword, 30); 


        DB::table('user')->insert([
            'username' => $request->username,
            'password' => $split[0],
            'extend' => $split[1],
            'extend' => $split[1],
        ]);

        return redirect('/')->with(['success' => 'User Name dan Password berhasil didaftarkan']);

    }

    public function login(Request $request){

        $user = $request->input('username');
        $password = $request->input('password');

        $dataUser = DB::table('user')->where(['username' => $user])->first();
        
        if($dataUser){
            $combine = $dataUser->password.$dataUser->extend;
            }
                if($dataUser->username == $user AND Hash::check($password, $combine)){
                    $request->session()->put('username', $dataUser->username);
                    return redirect('/university');
                }
                else{
                    return redirect('/')->with(['error' => 'Username dan Password Tidak ditemukan']);
                }
    }

}

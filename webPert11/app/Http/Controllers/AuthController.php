<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function loginShow()
    {
        if (Auth::check()) {

            return route('studentView');

        }else{

            return view('auth.login');
        }

    }


    public function login(Request $request)
    {   
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        
        
        if (Auth::Attempt($data)) {

            return redirect('/student');

        } else{

            Session::flash('pesan', 'Email atau Password Salah');
            return redirect() -> route('login.show');

        }
    }



    /*

    */ 

    public function registerShow()
    {
        return view('auth.register');
    }

    public function register(Request $request) 
    {

        $request->validate([

            'email' => 'required|email:rfc,dns|unique:users,email',
            'name' => 'required|min:4',
            'password' => 'required|min:4',
            'password_confirmation' => 'required|same:password'

        ]);

        $student = new User;
        $student->email = request('email');
        $student->name = request('name');
        $student->password = request('password');
        $student->save();
        
        //$user = User::create($request->validated());

        auth()->login($student);

        // return redirect('/t3g4l/ministrator/home')->with('success', "Akun Berhasil Teregistrasi !");
        return redirect()->route('studentView')->with('pesan', "Akun Berhasil Teregistrasi !");
    }


    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        //return redirect('login');
        return redirect('/') -> with('pesan', "Logout Berhasil");
    }
}

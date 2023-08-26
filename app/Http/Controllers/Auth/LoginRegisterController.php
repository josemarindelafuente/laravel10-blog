<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginRegisterController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

/*==================================================================*/ 

    public function authenticate(Request $request){
        //return $request->all();

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            /*
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
                */
                $request->session()->regenerate();
                return redirect()->route('cursos');
        } 

        return back()->withErrors([
            'email' => 'Los datos ingresados no son correctos.',
        ])->onlyInput('email');

    }

/*==================================================================*/

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    } 
}


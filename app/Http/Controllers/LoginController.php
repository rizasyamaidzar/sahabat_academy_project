<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            "title" => 'Login',
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials)){

            $user = Auth::user();
            // Mengecek Status Aktif dan tidak
            if ($user->status == 1){ 
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }else{
                Auth::logout();
                return back()->with('loginError', 'Your account is not active.');
            }
            
        }
         
        return back()->with('loginError', 'login failed!');
        
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
     
        return redirect('/');
    }

    public function player(){
        return view('admin.player');
    }
}

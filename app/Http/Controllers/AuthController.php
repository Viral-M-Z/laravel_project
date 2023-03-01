<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function login(){
        $attributes = request()->validate([
            'email'=> 'required|email',
            'password' => 'required'
        ]);
        // Uncomment this to create an admin user and use login form to send data
       /*  $save=[
            'name' => "admin",
            'email'=>$attributes['email'],
            'password'=> Hash::make($attributes['password'])
        ];
        ddd(User::create($save)); */
        if(auth()->attempt($attributes)){
            return redirect('/dashboard');
        }else{
            set_messages('Either your email or password is incorrect.','danger');
            return back();
        }
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function dashboard(){
        return view("backend.dashboard");
    }

    public function forgot_password(){
        return view("auth.forgot");
    }

    public function send_reset_link(Request $request){
        $request->validate(['email' => 'required|email']);//validation
        $status = Password::sendResetLink( $request->only('email')); //send reset password link
        if($status === Password::RESET_LINK_SENT){
             set_messages( __($status),'success');
           return back()->with(['status' => __($status)]);
        }else{
            return back()->withErrors(['email' => __($status)]);
        }
    }
    
    public function reset_password($token) {
        return view('auth.reset', ['token' => $token]);
    }

    public function update_password(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        //Reset the password in the DB using token
        $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );
    // dd($status);
        if($status === Password::PASSWORD_RESET){
            set_messages( __($status),'success');
            return redirect()->route('login')->with('status', __($status));
        }else{
            return back()->withErrors(['email' => [__($status)]]);
        }

    }

}

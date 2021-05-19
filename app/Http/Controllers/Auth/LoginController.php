<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login() {
        return view('admin.login');
    }
    public function postLogin(Request $request){
        $login =array(
            'email'=>$request->user,
            'password'=>$request->password
        );
        $login2 =array(
            'phone'=>$request->user,
            'password'=>$request->password
        );
        if(Auth::attempt($login) || Auth::attempt($login2)){
            if(Auth::user()->role == 0 || Auth::user()->role == 1){
                return redirect()->route('home')->with(['flash_level'=>'success','flash_message'=>'Đăng nhập thành công']);
            }
            else{
                return redirect()->route('index')->with(['flash_level'=>'success','flash_message'=>'Đăng nhập thành công']);
            }
            
            
        }
        else{
            return redirect()->back()->with(['flash_level'=>'danger','flash_message'=>'Tài khoản hoặc mật khẩu không chính xác']);
        }
        
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->route('index');
    }

}
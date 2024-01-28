<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        $admin = Admin::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            if ($user->email_verified_at) {
                Auth::guard('web')->login($user);
                Session::flash('login', 'Login Successful');
                return redirect()->route('index');
            } else {
                return redirect()->route('login')->with('error', 'Email address is not verified.');
            }
        } elseif ($admin && Hash::check($request->password, $admin->password)) {
            Auth::guard('admin')->login($admin);
            Session::flash('login', 'Login Successful');
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('login')->with('error', 'Email address and password are incorrect.');
        }
    }

    public function redirectToProvider()
        {
            return Socialite::driver('google')->redirect();
        }

        public function handleProviderCallback(\Request $request)
        {
            try {
                $user_google    = Socialite::driver('google')->user();
                $user           = User::where('email', $user_google->getEmail())->first();
    
                //jika user ada maka langsung di redirect ke halaman home
                //jika user tidak ada maka simpan ke database
                //$user_google menyimpan data google account seperti email, foto, dsb
    
                if($user != null){
                    \auth()->login($user, true);
                    return redirect()->route('home');
                }else{
                    $create = User::Create([
                        'email'             => $user_google->getEmail(),
                        'name'              => $user_google->getName(),
                        'password'          => 0,
                        'email_verified_at' => now()
                    ]);
            
                    
                    \auth()->login($create, true);
                    return redirect()->route('home');
                }
    
            } catch (\Exception $e) {
                return redirect()->route('login');
            }
    
    
        }
}

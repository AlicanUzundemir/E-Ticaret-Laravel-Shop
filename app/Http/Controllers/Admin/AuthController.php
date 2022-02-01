<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function adminLoginForm()
    {
        return view('admin.auth.login');
    }
    public function adminLogin(Request $request)
    {
        $this->validate(\request(), [

            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->pass])){

            \request()->session()->regenerate();
            
            return redirect()->intended('/admin/dashbord');
            //dd($request);
        }
        else{
            return back()->with([
                'message' => 'Hatalı giris yaptınız.Lütfen bilgilerinizi kontrol ediniz.',
                'message_type' => 'danger'
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\UserRegisterMail;
use App\Models\User;
use Auth;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountForm()
    {
        return view('frontend.account');
    }

    public function login(Request $request)
    {
        $this->validate(\request(),[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(auth()->user()->email_verified_at === null){
                auth()->logout();
                return back()->with([
                    'message' => 'Lütfen öncelikle emailiize gelen aktivasyon linkine tıklayınız',
                    'message_type' => 'warning'
                ]);
            }

            \request()->session()->regenerate();
            return redirect()->intended('/');

        }
        else{
            
            return back()->with([
                'message' => 'Hatalı giriş yaptınız.Lütfen bilgilerinizi kontrol ediniz',
                'message_type' => 'danger'
            ]);
        }
    }

    public function activation($token)
    {
        $user = User::all()->where('access_token',$token)->firstOrFail();
        /*    $user->update([
                'remember_token' => null,
                'email_verified_at' => now()
            ]);*/
        $user->remember_token = null;
        $user->access_token =null;
        $user->email_verified_at = now();
        $user->save();
        return redirect()->route('homepage')
            ->with('message','Aktivasyon işleminiz başarıyla yapılmıştır')
            ->with('message_type','success');
    }

    public function logout(Request $request)
    {
        //$this->middleware('guest' , ['except' => ['logout','getLogout']]);
        auth()->logout();
        \request()->session()->flush();
        \request()->session()->regenerate();

        return redirect()->route('homepage');
    }

    public function register(Request $request)
    {
        //dd(request()->all());
        //dd($request->all());

        $this->validate(request(), [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users',
            'sifre' => 'required|confirmed|min:3|max:20'
        ]);
        $anyone = 'can';
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->sifre),
            'remember_token' => Str::random(10),
            'access_token' => Str::random(10),
        ]);

        //dd(request()->all());

        Mail::to($user->email)->send(new UserRegisterMail($user, $anyone));
        //auth()->login($user);

        return redirect()->route('homepage');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
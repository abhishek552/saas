<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Account;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'account_id' => ['required', 'string', 'max:255'],
            'admin_id' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function adminRegistration(Request $request){
        // dd( Auth::user());
        //$account= Account::where('user_id',Auth::user()->id)->first();
        //dd($account_id);
        return view('admin_registration');
    }

    public function createAdmin(Request $request){
        $this->validator($request->all())->validate();
        $registerData= array(
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            'user_role' => 3,
            "password" => Hash::make($request->input('password'))
        );
        //dd($registerData);
        $account= array(
            'account_name'=>$request->input('account_id')
        );
        $user = User::create($registerData);
        if($user){
           $account= Account::create($account);
        }
        return view('home');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Account;
use App\AccountuserMap;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'account_id' => ['required', 'string', 'max:255'],
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

    public function dashboard()
    {
        return view('dashboard');
    }

    public function userRegistration(Request $request){
        $login_detail='';
        //echo Auth::user()->getAccountId->Account_id;
        if(Auth::user()->user_role==2){
            //$login_detail= AccountuserMap::select('account.*')->join('account','account.id','=','account_user_map.Account_id')->where('account_user_map.user_id',Auth::user()->id)->first();
            $login_detail=Account::where('id',Auth::user()->getAccountId->account_id)->first();
        }else if(Auth::user()->user_role==3){
            $login_detail=Account::where('id',Auth::user()->getAccountId->account_id)->first();
        }
        //dd( $login_detail);
//dd($login_detail->account_name);
        return view('user_registration',compact('login_detail'));
    }

    public function createUser(Request $request){
        //dd($request->all());
        $this->validator($request->all())->validate();
        $account_id='';
        $registerData= array(
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            'user_role' =>$request->input('user_type'),
            "password" => Hash::make($request->input('password'))
        );
        $user = User::create($registerData);
       // dd($user->id);
        if(Auth::user()->user_role==1){

            $account= array(
                'account_name'=>$request->input('account_id')
            );
            if($user){
               $account_id= Account::create($account);
            }
            $detail= array(
                'user_id'=>$user->id,
                'account_id'=>Auth::user()->getAccountId->account_id,
                'created_by'=>Auth::user()->id
            );
        }else{
             $detail= array(
                'user_id'=>$user->id,
                'account_id'=>Auth::user()->getAccountId->account_id,
                'created_by'=>Auth::user()->id
            );
        }
        AccountuserMap::create($detail);

        return view('home');

    }

    public function userListing(Request $request){
        // $list= User::where('id',Auth::user()->id)->get()
        $accountDetails = Account::get(); 
        //$accountDetails= AccountuserMap::where('created_by',Auth::user()->id)->with('getAccountdetail')->get();
        //dd($accountDetails);

        return view('accountDetails',compact('accountDetails'));
    }    
}

<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Account;
use App\AccountuserMap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{


    protected function validator(array $data)
    {
        return Validator::make($data, [
        	'user_type'=>['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo '<pre>'; print_r(Auth::user()->name); echo '</pre>'; die();
        //$accountDetails = Account::orderBy('id','Desc')->get(); 
        $teamDetails= AccountuserMap::where('created_by',Auth::user()->id)->with('getAccountdetail')->OrderBy('id','Desc')->get();
        //dd($teamDetails);
        return view('team/index',compact('teamDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validator($request->all())->validate();
        $account_id='';
        $registerData= array(
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            'user_role' =>$request->input('user_type'),
            "password" => Hash::make($request->input('password'))
        );
        //dd($registerData);
        $user = User::create($registerData);
       // dd($user->id);
        $detail= array(
            'user_id'=>$user->id,
            'account_id'=>Auth::user()->getAccountId->account_id,
            'created_by'=>Auth::user()->id
        );
        
        AccountuserMap::create($detail);

        return  redirect('team')->with('message','User created successfully');
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
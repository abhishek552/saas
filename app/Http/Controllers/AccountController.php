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

class AccountController extends Controller
{


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'account_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
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
        $accountDetails = Account::orderBy('id','Desc')->get(); 
        return view('account.index',compact('accountDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');

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
            "name" => $request->input('user_name'),
            "email" => $request->input('email'),
            'user_role' =>2,
            "password" => Hash::make($request->input('password'))
        );
        $user = User::create($registerData);
        $account= array(
            'account_name'=>$request->input('account_name'),
            'description'=>$request->input('description'),
        );
        if($user){
           $account_id= Account::create($account);
        }
        $detail= array(
            'user_id'=>$user->id,
            'account_id'=>$account_id->id,
            'created_by'=>Auth::user()->id
        );
        AccountuserMap::create($detail);
        return  redirect('account')->with('message','Account created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $edit= Account::where('id',$id)->first();
        return view('account.edit',compact('edit'));
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
        //dd($request->all());
        $edit_detail=array(
            'account_name' => $request->input('account_name'), 
            'description' =>  $request->input('description')
        );
        $account_update= Account::where('id',$id)->update($edit_detail);
        return  redirect('account')->with('message','Account Update Successfully');
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

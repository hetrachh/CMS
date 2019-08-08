<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\UserMaster;
class UserController extends Controller
{
    // 

    public function show_login()
    {
        return view('Login');
    }
    public function Store_User(request $request)
    {
            $umaster = new UserMaster;
            $umaster->username = $request->input('uname');
            $umaster->email = $request->input('email');
            $umaster->password = $request->input('pass');
            $umaster->save();
            return redirect('/Login')->with('info','Registration success now login!!!');
    }
    public function Login(request $request)
    {
        $email = $request->input('email');
        $password = $request->input('pass');

        $user = DB::table('user_masters')->where(
            [
                ['email', '=', $email],
                ['password', '=', $password],
        ])->get(); 

        if(count($user)>0)
        {
            return redirect('/index');
        }
        else
        {
            return redirect('/Login')->with('info','Login Failed');
        }

    }
    public function showUsers()
    {
        $users = UserMaster::all();
        return view('index',['users'=>$users]);
    }
    public function delete_user($id)
    {
        UserMaster::where('id',$id)->delete();
        return back();
    }
    public function update_data($id)
    {
        $user = UserMaster::find($id);
        return view('update',['user'=>$user]);
    }
    public function edit_data($id,request $request)
    {
        
        $data = array(
            'email' => $request->input('email'),
            'password' => $request->input('pass'),
            'username' => $request->input('uname')
        );
        UserMaster::where('id',$id)->update($data);
        return redirect('index');
    }
}

<?php

namespace Sirikoon\Manual;

use Illuminate\Http\Request;
use Sirikoon\Manual\LoginModel;
use DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('Sirikoon.Manual.index');
    }

    public function toSignup()
    {
        return view('Sirikoon.Manual.signup');
    }

    public function add(Request $request)
    {
        DB::transaction(function () use($request){
            $detail = LoginModel::class;
            $detail = new $detail;
            $detail->username = $request->user;
            $detail->password = $request->pass;
            $detail->save();
        });
        $username = $request->user;
        $password = $request->pass;
        return view('Sirikoon.Manual.show')
        ->withUsername($username)
        ->withPassword($password);
    }

    public function check(Request $request)
    {
        $user = LoginModel::where([
            ['username', $request->user],
            ['password', $request->pass]
        ])->first();
        if($user != null)
        {
            echo "Login Success";
        }
        else{
            echo 'Fail';
        }
    }
}

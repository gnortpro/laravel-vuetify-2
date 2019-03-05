<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin(){
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, ['email' => 'required|email', 'password' => 'required|min:6|max:20', ], ['email.required' => 'Vui lòng nhập email', 'email.email' => 'Email không đúng định dạng', 'password.required' => 'Vui lòng nhập mật khẩu', 'password.min' => 'Mật khẩu ít nhất 6 kí tự', 'password.max' => 'Mật khẩu không quá 20 kí tự']); 

        $email = $request->email;
        $password = $request->password;     
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return $this->successResponse(
	    		[], 
	    		'Get the newest room for feedback');
              
        } else {
            return $this->errorResponse(self::ERROR_BAD_REQUEST, [], self::getErrorMessage(self::ERROR_BAD_REQUEST));
        }
    }
}

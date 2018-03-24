<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    	$validator = validator::make($request->all(),[
    		'email' => 'required|email',
    		'password' => 'required|min:4|max:20',
    	],[
    		'email.required' => 'Email không được phép để trống.',
    		'email.email' => 'Không đúng định dạng email , vui lòng nhập lại.',
    		'password.required'=>'Mật khẩu không được để trống',
			'password.min'=>'Mật khẩu không được dưới 4 ký tự',
			'password.max'=>'Mật khẩu không được quá 20 ký tự',
    	]);

    	if($validator->passes())
    	{
    		$email = $request->input('email');
    		$password = $request->input('password');
    		
    		if(Auth::attempt(['email'=>$email,'password'=>$password]))
    		{
    			return Response::json(['success' => 'Thao tác thành công']);
    		}
    		else
    		{
    			echo "Error";
                exit;   
    		}
    	}

    	return Response::json(['errors' => $validator->errors()]);
    }
}

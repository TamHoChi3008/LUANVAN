<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;
class LoginControllers extends Controller
{
    public function index()
    {
        return view('userlogin.index');
    }

    public function login(Request $request)
    {
        $data = $request->all();
        $email = $data['user_email'];
        $password = md5($request->user_password);
        $login = User::where('user_email',$email)->where('user_password',$password)->first();
        if($login){
            $login_count = $login->count();
            if($login_count>0){
                Session::put('user_id',$login->user_id);
                Session::put('user_name',$login->user_name);
                return Redirect('/');
            }
        }else{
            Toastr::warning('Email or Password incorrect !!', '');
            return Redirect('/login');
        }
    }
    

    public function register_user(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'user_name' => 'required|max:125',
            'user_email' => 'required|max:125|email',
            'user_password' => 'required',
        ];

        $messages = [
            'user_name.required' => 'Please enter your name!',
            'user_email.required' => 'Please enter your email!',
            'user_password.required' => 'Please enter your password!'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('/register_user')->withErrors($validator)->withInput();
        } else {

            // if(isset($request->role_doctor)){
                
            // }

            $data = array();
            $data['user_name'] = $request->user_name;
            $data['user_email'] = $request->user_email;
            $data['user_password'] = md5($request->user_password);
            $data['user_role'] = '2';
            $user_id = DB::table('user')->insertGetId($data);

            Session::put('user_id', $user_id);
            Session::put('user_name', $request->user_name);

            return redirect('/login');
        }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AdminControllers extends Controller
{
    public function checkAdmin()
    {
        $user_id = Session::get('user_id');
        if ($user_id) {
            return Redirect::to('/dashboard');
        } else {
            Toastr::error('Warning','You need to login to access this page !!');
            return Redirect::to('/admin/login')->send();
        }
    }
    public function index()
    {
                $this->checkAdmin();

        return view('admin.admin_dashboard');
    }

    public function auth_login()
    {
        //$this->checkAdmin();
        return view('admin.auth-login');
    }

    public function login_dashboard(Request $request)
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
                    Session::put('user_role',$login->user_role);
                    $role = Session::get('user_role');
                    if($role == 0){
                        Toastr::success('Access successfully!!', 'Welcome'); 
                        return redirect('/dashboard');
                    }else{
                        Toastr::error('ERROR','Email or Password incorrect !!');
                        return redirect('/admin/login');
                        
                    }

                }
            }else{
                Toastr::error('ERROR','Email or Password incorrect !!');
                return Redirect('/admin/login');
            }
    }
    public function logout_dashboard()
    {
        Session::flush();
        return redirect('/admin/login');
    }

}

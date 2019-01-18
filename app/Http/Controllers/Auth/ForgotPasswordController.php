<?php

namespace App\Http\Controllers\Auth;    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\User;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    
    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('esqueceu');
    }

    public function editAPI(Request $req){
        $user = User::where('email', $req->input('email'))->first();
        if($user == null)
            return ['status' => 'failed', 'message' => 'Seu e-mail está incorreto'];
        
        if($req->input('password') == "" && $req->input('newPassword') == "" ){
            if($user->secreta == $req->input('secreta'))
                return ['status' => 'success'];
            return ['status' => 'failed', 'message' => 'Sua palavra secreta está incorreta'];
        }

        if($user->secreta == $req->input('secreta')){
            if($req->input('password') != $req->input('newPassword'))
                return ['status' => 'failed', 'message' => 'As senhas não se coincidem'];
            $user->password = bcrypt($req->input('password'));
            $user->save();
            return ['status' => 'success', 'message' => '/'];
        }
        return ['status' => 'failed'];
    }
}

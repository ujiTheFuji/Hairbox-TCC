<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Cartao;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/perfil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       $usuario = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'cep' => implode( explode( '-' ,$data['cep'] ) ),
            'box_id' => $data['box'],
            'password' => bcrypt($data['password']),
            'estado' => $data['estado'],
            'cidade' => $data['cidade'],
            'bairro' => $data['bairro'],
            'rua' => $data['rua'],
            'secreta' => $data['secreta'],
        ]);
        
        Cartao::create([
            'user_id' => $usuario->id,
            'nome' => $data['nameCard'],
            'nasc' => $data['nascCard'],
            'cpf' => $data['cpfCard'],
            'telefone' => $data['teleCard'],
            'tipo_cartao' => $data['card'],
            'numero_cartao' => $data['numCard'],
            'codseg' => $data['codsegCard'],
            'data_exp' => $data['expCard'],
        ]);
        return $usuario;
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    
    protected $redirectPath = '/bienvenido';

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }*/
    
       public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
      
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }*/

     protected function getLogin()
    {
        return view("auth.login");
    }
       
        public function postLogin(Request $request)
   {
    $this->validate($request, [
        'nombre_usuario' => 'required',
        'password' => 'required',
    ]);
    //$usuarios = $request ->input("username");
    $credentials = $request->only('nombre_usuario', 'password');
    if ($this->auth->attempt($credentials));// $request->has('remember')))
    {
         
            //$user = User::findOrFail($request->perfil_id);
            /*$perfil=$this->auth->user()->perfil_id;
            $nombre=$this->auth->user()->username;
            if ($perfil=='1'){*/   
                return view('base');
             
    }
    return "credenciales incorrectas";
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return \App\Usuario::create([
            'name' => $data['nombre_usuario'],
            'persona_id' => $data['persona_id'],
            'password' => bcrypt($data['password']),
        ]);
    }
}

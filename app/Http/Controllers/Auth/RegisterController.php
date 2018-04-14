<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\user_type\User_type;
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
    protected $redirectTo = '/permission/create'; /*te redirecciona a cierta ruta luego de registrarse*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        /*$this->middleware('auth');
         $this->middleware('admin', ['only' =>'create']);*/

        /*
        $this->middleware('admin', ['only' =>'create']);*/
        /*$this->middleware('guest');*/
        /*$this->middleware('auth');*/
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
            'password' => 'required|string|min:6|confirmed',
            'user_type_id'=> 'required',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'user_type_id'=> $data['user_type_id'],
        ]);
    }

        public function index(){
     $persons = User_type::get()->pluck('type_name','id')->prepend('selecciona',0);
        return view('auth.login',["persons"=>$persons]);

        }

}

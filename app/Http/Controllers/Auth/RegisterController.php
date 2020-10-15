<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo = '/inicio';

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
        $messages = [
            'email.required' => 'El correo electronico es obligatorio',
            'email.email' => 'El correo electronico debe ser un correo electronico válido',
            'email.unique' => 'El correo electronico ya se encuentra registrado',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener mínimo 8 caracteres',
            'password.alpha_num' => 'La contraseña debe contener al menos una letra y almenos un número',
        ];
        return Validator::make($data, [
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'alpha_num'],
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     */
    protected function formRegister()
    {
        return view('auth.register');
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
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        Session::flash('success', 'Usuario creado exitosamente');
    }

    protected function back(Request $data)
    {
        return redirect()->route('login');
    }
}

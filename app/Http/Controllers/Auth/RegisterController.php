<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        // dd(request()->all());
        return Validator::make($data, [
            'first_name' => ['required', 'max:25', 'alpha'],
            'middle_name' => ['nullable','max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:8'],
            'display_picture_link' => ['required'],
            'role_id' => ['required'],
            'gender' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $namaFileBaru = date("Y-m-d h-i-s")."." .$data['display_picture_link']->getClientOriginalExtension();

        $data['display_picture_link'] = request()->file('display_picture_link')->move(public_path('images'), $namaFileBaru);

        return User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'display_picture_link' => $namaFileBaru,
            'role_id' => $data['role_id'],
            'gender_id' => $data['gender'],
        ]);
    }
}

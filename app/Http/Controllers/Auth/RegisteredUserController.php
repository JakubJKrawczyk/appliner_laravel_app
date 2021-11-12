<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'first_name' => ['required', 'string', 'max:40'],
            'second_name' => ['required', 'string', 'max:40'],
            'phone_number' => ['required', 'string', 'max:40'],
            'company_name' => [ 'nullable','string', 'max:40'],
            'nip' => ['nullable','string', 'max:40']

        ]);
        if(empty($request->company_name) || empty($request->nip)){
          $user = User::create([
              'name' => $request->name,
              'email' => $request->email,
              'password' => Hash::make($request->password),
              'imie' => $request->first_name,
              'Nazwisko' => $request->second_name,
              'Telefon' => $request->phone_number,
              'TypKonta'=>'1'
          ]);
        }
        else{
          $user = User::create([
              'name' => $request->name,
              'email' => $request->email,
              'password' => Hash::make($request->password),
              'imie' => $request->first_name,
              'Nazwisko' => $request->second_name,
              'Telefon' => $request->phone_number,
              'NIP' => $request->nip,
              'NazwaFirmy' => $request->company_name,
              'TypKonta'=>'2'
          ]);
      }
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

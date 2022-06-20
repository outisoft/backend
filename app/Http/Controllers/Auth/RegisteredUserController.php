<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Propiedad;
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
        ]);

        $user = User::create([
            'name' => $request->name,
            'apePat' => $request->apePat,
            'apeMat' => $request->apeMat,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //dd($request);

        //$user->roles()->sync([ $roleuser->id ]);
        
        event(new Registered($user));
        User::findOrFail(2)->roles()->sync($user->id);
        Auth::login($user);

        $propiedades = Propiedad::orderBy('id','Desc')->paginate(20);
        return view('welcome', compact('propiedades'));

        //$propiedades = Propiedad::orderBy('id','Desc')->paginate(20);
        //return view('welcome', compact('propiedades'));
    }
}

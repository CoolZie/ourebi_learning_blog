<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login()
    {
        return view('layouts.login');
    }
    public function register()
    {
        return view('layouts.register');

    }

    public function createUser(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|unique:users|max:100',
            'password' => 'required|confirmed',
        ],[
            'name.required' => "Le nom est obligatoire",
            'email.required' => "L'email est obligatoire",
            'email.unique' => "L'email est déja utilisé",
            'password.required' => "Le mot de passe est obligatoire",
            'password.confirmed' => "Les mots de passe ne sont pas identiques",
        ]);

         if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        } 

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('login')->withMessage("Votre compte a été crée");
        //session(["message"=>"Votre compte a été crée"])
        // return redirect('login')->with(["message" =>"Votre compte a été crée"]);
    }
    public function admin()
    {
        return view('layouts.admin');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 'ADMIN'){
                return redirect()->intended('administrateur');
            }
            return redirect()->intended('add-article');
        }
        return back()->withErrors("Email ou Mot de passe incorrect");
        /* $email = $request->email;
        $password = $request->password;
        $user = User::where("email",$email)->first();
        if (Hash::check($password, $user->password)) {
            Auth::login($user);
            return redirect('/add-article');
        }
        return back()->withErrors("Email ou Mot de passe incorrect");
        return redirect('login')->withErrors("Email ou Mot de passe incorrect"); */
       
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}

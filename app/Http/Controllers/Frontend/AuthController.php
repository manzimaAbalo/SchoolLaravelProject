<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request  $request) {
        $message = "";
        $message = "";
        try {
            $validate = Validator::make(
                $request->all(),
                [
                    'username' => ['required', 'string', 'max:255'],
                    'password' => ['required', 'string']
                ],
                [
                    'email.required' => 'Veuillez saisir votre adresse email.',
                    'password.required' => 'Veuillez saisir votre mot de passe.'
                ]
            );
            if ($validate->fails()) {
                $message = "Veuillez remplir tous les champs";
                session()->flash("error", $validate->errors());
                return redirect()->back()->withErrors(["Email ou Mot de passe incorrect"]);
            } else {
                $user = User::where('email', $request->username)->orWhere('phone', $request->username)->first();
                if (!isset($user)) {
                    $message = "Echec de connexion, Email ou mot de passe incorrecte ";
                    session()->flash("error", $message);
                    return redirect()->back();
                } else {
                    $password = $request->password;
                    if (Hash::check($password, $user->password)) {
                        Auth::login($user);
                        $message = "Utilisateur authentifé avec succès";
                        session()->flash("success", $message);
                        return redirect()->route('office.home');
                    } else {
                        $message = "Email ou mot de passe incorrecte";
                        session()->flash("error", $message);
                        return redirect()->back();
                    }
                }
            }
        } catch (\Throwable $th) {
            session()->flash("error",$th->getMessage());
            return redirect()->back();
        }
    }

    public function registerUser(Request $request){
        
    }
}

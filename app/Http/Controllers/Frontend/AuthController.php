<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
                return redirect()->back()->withErrors(["Echec, vos données sont incorrectes"]);
            } else {
                $user = User::where('email', $request->username)->orWhere('phone', $request->username)->first();
                if (!isset($user)) {
                    $message = "Echec de connexion, Email ou mot de passe incorrecte ";
                    session()->flash("error", $message);
                    return redirect()->back();
                } else {
                    if ($user->role_id !== 1 || $user->role_id !== 2 ) {
                        $password = $request->password;
                        if (Hash::check($password, $user->password)) {
                            Auth::login($user);
                            $message = "Utilisateur authentifé avec succès";
                            session()->flash("success", $message);
                            return redirect()->route('accueil');
                        } else {
                            $message = "Email ou mot de passe incorrecte";
                            session()->flash("error", $message);
                            return redirect()->back();
                        }
                    }else{
                        $message = "Echec, vous n'êtes pas autorisé à acceder à cette page";
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
        $message = "";
        try {
            $validate = Validator::make(
                $request->all(),
                [
                    'nom' => ['required', 'string', 'max:255'],
                    'prenoms' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string','email', 'max:255'],
                    'profession' => ['required', 'string', 'max:255'],
                    'address' => ['nullable', 'string', 'max:255'],
                    'password' => ['required', 'string']
                ],
                [
                    'email.required' => 'Veuillez saisir votre adresse email.',
                    'password.required' => 'Veuillez saisir votre mot de passe.',
                    'required' => 'Le champ {{field}} est obligatoire '
                ]
            );
            if ($validate->fails()) {
                $message = "Veuillez remplir tous les champs";
                session()->flash("error", $message);
                return redirect()->back()->withErrors(["Echec, veuillez remplir tous les champs"]);
            }else {
                $checkUser = User::where('email', $request->email)->orWhere('phone', $request->phone)->first();
                if (isset($checkUser)) {
                    $message = "Cet utilisateur existe déjà";
                    session()->flash("error", $message);
                    return redirect()->back();
                } else {
                    DB::beginTransaction();
                    $nom = $request->nom;
                    $prenoms = $request->prenoms;
                    $email = $request->email;
                    $phone = $request->phone;
                    $password = $request->password;
                    $profession = $request->profession;
                    $address = $request->address;

                    $user = User::create([
                        'name'=>$prenoms,
                        'email'=>$email,
                        'phone'=>$phone,
                        'role_id'=>3,
                        'password'=>Hash::make($password)
                    ]);
                    if (isset($user)) {
                        $profile = Profile::create([
                            'user_id'=>$user->id,
                            'nom'=>$nom,
                            'prenoms'=>$prenoms,
                            'email'=>$email,
                            'phone'=>$phone,
                            'profession'=>$profession,
                            'adresses'=>$address
                        ]);
                        if (isset($profile)){
                            DB::commit();
                            // Auth::loginUsingId($user->id);
                            $message = "Votre compte a été crée avec succès,veuillez vous connectez";
                            session()->flash("success", $message);
                            return redirect()->back();
                        }else {
                            DB::rollBack();
                            $message = "Une erreur est survenue lors de la création du compte ";
                            session()->flash("error", $message);
                            return redirect()->back();
                        }
                    } else {
                        DB::rollBack();
                        $message = "Une erreur est survenue lors de la création du compte ";
                        session()->flash("error", $message);
                        return redirect()->back();
                    }
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}

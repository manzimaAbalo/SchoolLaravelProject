<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Note;
use App\Models\Profile;
use App\Models\Rule;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function homePage()
    {
        return view('espace-admin.pages.dashboard.home');
    }

    public function schoolPage()
    {
        $schools = School::orderBy('created_at', 'desc')->paginate(10);
        return view('espace-admin.pages.schools.school', [
            'schools' => $schools,
        ]);
    }

    public function rulePage()
    {
        $rules = Rule::orderBy('created_at', 'desc')->with(['category'])->get();
        return view('espace-admin.pages.rules.rule', [
            'rules' => $rules
        ]);
    }

    public function notePage()
    {
        $notes = Note::orderBy('created_at', 'desc')->get();
        return view('espace-admin.pages.notes.note', [
            'notes' => $notes
        ]);
    }

    public function commentPage()
    {
        $comments = Comment::orderBy('created_at', 'desc')->get();
        return view('espace-admin.pages.comments.comment', [
            "comments" => $comments
        ]);
    }

    public function usersPage()
    {
        $users = Profile::orderBy('created_at', 'desc')->get();
        return view('espace-admin.pages.users.user', [
            'profiles' => $users
        ]);
    }
    public function loginPage()
    {
        return view('espace-admin.pages.auth.logindash');
    }

    public function login(Request $request)
    {
        $message = "";
        try {
            $validate = Validator::make(
                $request->all(),
                [
                    'email' => ['required', 'string', 'email', 'max:255'],
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
                $user = User::where('email', $request->email)->first();
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

    public function changeCommentStatus(Request $request){
        $message = "";
        try {
            $validate = Validator::make($request->all(),[
                'status'=> 'required|in:0,1',
                'comment_id'=> 'required|exists:comments,id'
            ]);
            if ($validate->fails()) {
                $message = "Veuillez entrez de données correctes";
                session()->flash("error", $validate->errors());
                return redirect()->back();
            }else{
                $status = $request->status;
                $comment_id = $request->comment_id;
                $comment = Comment::find($comment_id);
                $comment->status = $status;
                $comment->save();
                $message = "Le status du commentaire a été modifié avec succès";
                session()->flash("success", $message);
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            session()->flash("error",$th->getMessage());
            return redirect()->back();
        }
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CategoryRule;
use App\Models\Comment;
use App\Models\Note;
use App\Models\Profile;
use App\Models\Rule;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    //
    public function accueil()
    {
        return view('website.home.accueil');
    }

    public function aboutPage()
    {
        return view('website.about.about');
    }

    public function schoolPage()
    {
        $schools = School::orderBy('created_at', 'desc')->paginate(10);
        return view('website.schools.index', [
            'schools' => $schools
        ]);
    }


    public function rate(Request $request)
    {
        try {
            // Récupérer les règles depuis le cache ou la base de données
            $rules = Cache::remember('rules', now()->addHours(24), function () {
                return Rule::all();
            });

            // Récupérer les catégories et leurs règles depuis le cache ou la base de données
            $categories = Cache::remember('categories', now()->addHours(24), function () {
                return CategoryRule::with(['rules'])->get();
            });

            // Récupérer les écoles depuis le cache ou la base de données
            $schools = Cache::remember('schools_with_notes', now()->addHours(24), function () {
                return School::orderBy('created_at', 'desc')->with(['notes'])->get();
            });

            // Calculer la moyenne des notes pour chaque école
            foreach ($schools as $school) {
                $totalNotes = 0;
                foreach ($school->notes as $note) {
                    $totalNotes += $note->value;
                }
                $average = count($school->notes) > 0 ? $totalNotes / count($school->notes) : 0;
                $school->average = $average;
            }

            // Trier les écoles par ordre décroissant de moyenne
            $sortedSchools = $schools->sortByDesc('average');

            return view('website.rate.classement', [
                'rules' => $rules,
                'schools' => $sortedSchools,
                'categories' => $categories,
            ]);
        } catch (\Throwable $th) {
            // Gérer les erreurs éventuelles
        }
    }



    public function loginPage()
    {
        return view('website.auth.login');
    }

    public function register()
    {
        return view('website.auth.register');
    }

    public function schoolPageDetails(Request $request)
    {
        $school_id = $request->school_id;
        $school = School::where('id', $school_id)->with(['comments'])->first();
        $categories = CategoryRule::orderBy('created_at', 'desc')->with(['rules'])->get();
        return view('website.schools.details-school', [
            'school_id' => $school_id,
            'school' => $school,
            'comments' => $school->comments,
            'categories' => $categories,
        ]);
    }

    public function add_school_comment(Request $request)
    {
        $message = "";
        try {
            $validate = Validator::make($request->all(), [
                'comment' => 'required',
                'school_id' => 'required|exists:schools,id'
            ]);
            if ($validate->fails()) {
                $message = "Veuillez remplir tous les champs";
                session()->flash("error", $message);
                return redirect()->back()->withErrors(["Echec, veuillez remplir tous les champs"]);
            } else {

                $user = Auth::user();
                $school_id = $request->school_id;
                if ($user == null) {
                    $message = "Connexion requis ...!";
                    session()->flash("error", $message);
                    return redirect()->back();
                } else {
                    $profile = Profile::where('user_id', $user->id)->first();
                    DB::beginTransaction();
                    $comment = Comment::create([
                        'profile_id' => $profile->id,
                        'school_id' => $school_id,
                        'comment' => $request->comment,
                    ]);
                    if ($comment == null) {
                        DB::rollBack();
                        $message = "Echec, une erreur est survenue, veuillez réessayez !";
                        session()->flash("error", $message);
                        return redirect()->back()->withErrors(["Echec, veuillez remplir tous les champs"]);
                    } else {
                        # save comment for school
                        DB::commit();
                        $message = "votre commentaire a été enrégistré avec succès";
                        session()->flash("success", $message);
                        return redirect()->back();
                    }
                }
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            $message = "Echec d'enregistrement de votre commentaire, " . $th->getMessage();
            session()->flash("error", $message);
            return redirect()->back();
        }
    }

    /**
     * add_school_notation function
     * Noter une école sur les différents critères de notation
     * @param Request $request
     * @return void
     */
    public function add_school_notation(Request $request)
    {
        $message = "";
        try {
            $validate = Validator::make($request->all(), [
                'school_id' => 'required|exists:schools,id'
            ]);
            if ($validate->fails()) {
                $message = "Veuillez remplir tous les champs";
                session()->flash("error", $message);
                return redirect()->back()->withErrors(["Echec, veuillez remplir tous les champs"]);
            } else {

                $user = Auth::user();
                if ($user == null) {
                    $message = "Connexion requis ...!";
                    session()->flash("error", $message);
                    return redirect()->back();
                } else {
                    DB::beginTransaction();
                    $notes = $request->notes;
                    $data = [];
                    $school_id = $request->school_id;
                    $profile = Profile::where('user_id', $user->id)->first();
                    foreach ($notes as $key => $note) {
                        if (isset($note['rule_id']) && isset($note['note'])) {
                            # Vérifier si l'utilisateur actuel n'a pas déjà attribué de note à un même critère pour une même école ..
                            $check_note_exist = Note::where('rule_id', $note['rule_id'])->where('school_id', $school_id)->where('profile_id', $profile->id)->first();
                            if ($check_note_exist == null) { //sinon nouvelle note
                                $data[] = [
                                    'rule_id' => $note['rule_id'],
                                    'note' => $note['note'],
                                    'school_id' => $school_id,
                                    'profile_id' => $profile->id
                                ];
                            }
                        }
                    }
                    $school = School::where('id', $request->school_id)->first();

                    $schoolNote = $school->notes()->createMany($data);

                    if ($schoolNote == null) {
                        DB::rollBack();
                        $message = "Echec, une erreur est survenue, veuillez réessayez !";
                        session()->flash("error", $message);
                        return redirect()->back();
                    } else {
                        # save comment for school
                        DB::commit();
                        $message = "Vos notes ont été attribué avec succès";
                        session()->flash("success", $message);
                        return redirect()->back();
                    }
                }
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            $message = "Echec d'enregistrement de votre commentaire, " . $th->getMessage();
            session()->flash("error", $message);
            return redirect()->back();
        }
    }
}

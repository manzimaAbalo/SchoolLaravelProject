<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{

    public function createSchoolPage()
    {
        return view('espace-admin.pages.schools.add-school');
    }

    public function addSchool(Request $request)
    {
        $message = "";
        try {

            $validate = Validator::make($request->all(), [
                'name' => 'required|unique:schools,name',
                'email' => 'required',
                'site_web' => 'required',
                'address' => 'nullable',
                'responsable_nom' => 'required',
                'responsable_prenoms' => 'nullable',
                'responsable_email' => 'nullable',
                'responsable_phone' => 'nullable',
            ]);
            if ($validate->fails()) {
                $message = "Echec de connexion, Vos données sont incorrectes";
                session()->flash("error", $message);
                return redirect()->back();
            } else {
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'site_web' => $request->site_web,
                    'address' => $request->address,
                    'contact' => $request->contact,
                    'description' => $request->description,
                    'responsable' => [
                        'responsable_nom' => $request->responsable_nom,
                        'responsable_prenoms' => $request->responsable_prenoms,
                        'responsable_email' => $request->responsable_email,
                        'responsable_phone' => $request->responsable_phone,
                    ],
                    'localisation' => $request->localisation
                ];

                if ($request->hasFile('logo')) {
                    $image = $request->file('logo');
                    $filename = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('uploads/schools/logo'), $filename);
                    $data['logo'] = $filename;
                }
                if ($request->hasFile('banner')) {
                    $image = $request->file('banner');
                    $filename = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('uploads/schools/banner'), $filename);
                    $data['banner'] = $filename;
                }

                DB::beginTransaction();
                $school = School::create($data);
                if ($school == null) {
                    DB::rollBack();
                    $message = "Echec de création de l'école ";
                    session()->flash("error", $message);
                    return redirect()->back();
                } else {
                    DB::commit();
                    $message = "Ecole ajoutée avec succès";
                    session()->flash("success", $message);
                    return redirect()->back();
                }
            }
        } catch (\Throwable $th) {
            session()->flash("error", $th->getMessage());
            return redirect()->back();
        }
    }

    public function editSchool(Request $request,$school_id){
        try {
            $school = School::where('id',$school_id)->first();
            if ($school !== null) {
                return view('espace-admin.pages.schools.edit-school',[
                    'school'=>$school
                ]);
            }else{
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function updateSchool(Request $request)
    {
        $message = "";
        try {

            $validate = Validator::make($request->all(), [
                'school_id' => 'required|exists:schools,id',
                'name' => 'required',
                'email' => 'required',
                'site_web' => 'required',
                'address' => 'nullable',
                'responsable_nom' => 'required',
                'responsable_prenoms' => 'nullable',
                'responsable_email' => 'nullable',
                'responsable_phone' => 'nullable',
                'logo' => 'nullable|file',
            ]);
            if ($validate->fails()) {
                $message = "Échec de la mise à jour, vos données sont incorrectes. ".$validate->errors();
                session()->flash("error", $message);
                return redirect()->back();
            } else {
                $school_id = $request->school_id;
                $school = School::where('id',$school_id)->first();

                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'site_web' => $request->site_web,
                    'address' => $request->address,
                    'contact' => $request->contact,
                    'description' => $request->description,
                    'responsable' => [
                        'responsable_nom' => $request->responsable_nom,
                        'responsable_prenoms' => $request->responsable_prenoms,
                        'responsable_email' => $request->responsable_email,
                        'responsable_phone' => $request->responsable_phone,
                    ],
                    'localisation' => $request->localisation
                ];

                if ($request->hasFile('logo')) {
                    $image = $request->file('logo');
                    $filename = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('uploads/schools/logo'), $filename);
                    $data['logo'] = $filename;
                }

                if ($request->hasFile('banner')) {
                    $image = $request->file('banner');
                    $filename = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('uploads/schools/banner'), $filename);
                    $data['banner'] = $filename;
                }

                DB::beginTransaction();
                $school->update($data);
                DB::commit();

                $message = "École mise à jour avec succès";
                session()->flash("success", $message);
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            session()->flash("error", $th->getMessage());
            return redirect()->back();
        }
    }
}

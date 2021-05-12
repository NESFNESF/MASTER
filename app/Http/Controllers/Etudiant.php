<?php

namespace App\Http\Controllers;

use App\Models\ClasseEleve;
use App\Models\CoursEleve;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Etudiant extends Controller
{
    public function storeet(Request $request)
    {


        User::create([
            'name' => $request->input('name'),
            'prenom' => $request->input('prenom'),
            'tel' =>$request->input('tel'),
            'login'=>$request->input('email'),
            'type_user'=>$request->input('type_user'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $ens = DB::table('users')->where('login',$request->input('email'))->value('id');

        $classe_etudiant = new ClasseEleve();

        $classe_etudiant->idU = $ens;
        $classe_etudiant->idC = $request->input('idC');

        $classe_etudiant->save();


        return redirect()->route('dashboard')
            ->with('succes','creation réussit !!');

    }


    public function storeeval(Request $request,$id){

        $cours = DB::table('evaluations')->where('idC',$id)->get();

        return view('Etudiant.resultat',compact('cours','request'));

    }


}

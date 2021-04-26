<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\ClasseEnseignant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Administrateur extends Controller
{
    public function storeclasse(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'description' => 'required',

        ]);

        $classe = new  Classe();

        $classe->nom = $request->input('nom');
        $classe->Description = $request->input('description');


        $classe->save();

        return view('Admi.listeclasse');
    }

    public function storeens(Request $request)
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


        $classes = DB::table('classes')->get();


        foreach ($classes as $class) {
            $t = 'classe'.$class->id;
            $choix = $request->input($t);
            if($choix!=''){
                $class_ens = new ClasseEnseignant();
                $class_ens ->idU = $ens;
                $class_ens ->idC = $class->id;
                $class_ens ->save();
            }

        }

        return redirect()->route('listeens')
            ->with('succes','Nouvel enseignant crée !!');

    }




}

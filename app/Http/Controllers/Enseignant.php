<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Cours;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Enseignant extends Controller
{
    public function storelecon(Request $request) {



        $cours = new Cours();
        $cours->titre = $request->input('titre');
        $cours->indicateur = $request->input('indicateur');
        $cours->situation= $request->input('situation');
        $cours->contenu = $request->input('contenu');
        $cours->unite = $request->input('unite');
        $a = $request->file('file');
        $lien = uniqid().'-'.$a->getClientOriginalName();
        $a->move( public_path().'/Cours/',$lien);
        $cours->fichier = $lien;
        $cours->idC = $request->input('idC');
        $cours->idU = $request->input('idU');



        $cours->save();


        $id = DB::table('cours')->where('titre',$request->input('titre'))->value('id');

        $eva = new Evaluation();
        $eva->idC = $id;


        for($i=1;$i <= $request->input('compteurqcm');$i++){

            $eva = new Evaluation();
            $eva->idC = $id;
            $qcm1 = $request->input('reponsee1'.$i);
            $qcm2 = $request->input('reponsee2'.$i);
            $qcm3 = $request->input('reponsee3'.$i);
            $qcm4 = $request->input('reponsee4'.$i);
            $choix1 = $request->input('qcm1'.$i);
            $choix2 = $request->input('qcm2'.$i);
            $choix3 = $request->input('qcm3'.$i);





            if(isset($choix1)==true){
                $eva->reponse = $qcm1;
            }elseif(isset($choix2)==true){
                $eva->reponse = $qcm2;
            }elseif(isset($choix3)==true){
                $eva->reponse = $qcm3;
            }else{
                $eva->reponse = $qcm4;
            }
            $eva->qcm1 = $qcm1;
            $eva->qcm2 = $qcm2;
            $eva->qcm3 = $qcm3;
            $eva->qcm4 = $qcm4;
            $eva->description = $request->input('evaluation'.$i);

            $eva->save();
        }


        return redirect()->route('dashboard')
        ->with('succes','Nouvel enseignant crée !!');


    }

    public function storecommen(Request $request){

        $commen = new Commentaire();
        $commen -> idU = $request->input('idU');
        $commen -> idC = $request->input('idC');
        $commen ->description = $request ->input('comment');

        $commen ->save();

        return redirect()->route('forum',$request->input('idC'))
        ->with('succes','Nouvel enseignant crée !!');

    }
    public function storeleconmodif(Request $request) {



        DB::table('evaluations')->where('idC', $request->input('idcours'))->delete();


        DB::table('cours')->where('id', $request->input('idcours'))->delete();


        $cours = new Cours();
        $cours->titre = $request->input('titre');
        $cours->indicateur = $request->input('indicateur');
        $cours->situation= $request->input('situation');
        $cours->contenu = $request->input('contenu');
        $cours->unite = $request->input('unite');
        $a = $request->file('file');
        $lien = uniqid().'-'.$a->getClientOriginalName();
        $a->move( public_path().'/Cours/',$lien);
        $cours->fichier = $lien;
        $cours->idC = $request->input('idC');
        $cours->idU = $request->input('idU');



        $cours->save();


        $id = DB::table('cours')->where('titre',$request->input('titre'))->value('id');

        $eva = new Evaluation();
        $eva->idC = $id;


        for($i=1;$i <= $request->input('compteurqcm');$i++){

            $eva = new Evaluation();
            $eva->idC = $id;
            $qcm1 = $request->input('reponsee1'.$i);
            $qcm2 = $request->input('reponsee2'.$i);
            $qcm3 = $request->input('reponsee3'.$i);
            $qcm4 = $request->input('reponsee4'.$i);
            $choix1 = $request->input('qcm1'.$i);
            $choix2 = $request->input('qcm2'.$i);
            $choix3 = $request->input('qcm3'.$i);





            if(isset($choix1)==true){
                $eva->reponse = $qcm1;
            }elseif(isset($choix2)==true){
                $eva->reponse = $qcm2;
            }elseif(isset($choix3)==true){
                $eva->reponse = $qcm3;
            }else{
                $eva->reponse = $qcm4;
            }
            $eva->qcm1 = $qcm1;
            $eva->qcm2 = $qcm2;
            $eva->qcm3 = $qcm3;
            $eva->qcm4 = $qcm4;
            $eva->description = $request->input('evaluation'.$i);

            $eva->save();
        }


        return redirect()->route('dashboard')
        ->with('succes','Nouvel enseignant crée !!');    }


}

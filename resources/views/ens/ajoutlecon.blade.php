@extends('index')

@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url(images/slider_inclass.jpg); background-attachment: fixed; background-position: 50% 50%;">
    <div class="breadcrumb_wrap_inner">
    <div class="container">
    <h1>Nouvelle leçon</h1>
    <ul class="breadcrumbs">
    <li><a href="index.html">Accueil</a> /</li>
    <li>Ajouter une leçon</li>
    </ul>
    </div>
    </div>
    </div>


    <div id="contact_wrap" class="contact_wrap">
    <div class="container">



    <div class="">
    <h3>Entrer les informations de la leçon</h3>

    <div class="contact_form">
    <form method="POST" action="{{ route('storelecon') }}" enctype="multipart/form-data">
        @csrf
        <input type="number" name="idU" value="{{ Auth::user()->id }}" hidden>
      <h4>Choisissez une classe :</h4>
      <br>
        <p><div class="input-group">
      @foreach (DB::table('classes')->get() as $class )


 <label >{{ $class->nom }} </label>
 <input type="radio" name="idC" value="{{ $class->id }}" >


                    @endforeach</div>
        </p><br><br>
    <input class="form-control" placeholder="Titre de la leçon" name="titre" type="text" required>
    <input class="form-control" placeholder="Unité ou Matière" name="unite" type="text" required>

    <textarea class="form-control" rows="5" placeholder="Indicateur de compétence" required name="indicateur"></textarea>
    <textarea class="form-control" rows="5" placeholder="Situation problème" required name="situation"></textarea>
    <textarea class="form-control" rows="10" required placeholder="Rédiger le contenu de votre leçon ici..." name="contenu"></textarea>
    <div class="form-group">
        <label class=" form-control-label">Documents associés à la leçon : </label>
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
            <input class="form-control" type="file" required name="file" required>
        </div>
        <small class="form-text text-muted">Placer le documents ici</small>
    </div>


    <div class="form-group">
        <label class=" form-control-label">Evaluation  <br/> Partie QCM : (Choisissez unique la réponse parmi les 4 proposées qui est vraie) </label>
        <div class="input-group">

            <div id="qcm">
                <div class="row">
                    <br />
                    <input name="evaluation1" required class="form-control " type="text" placeholder="saisir la question 1" size="50" />
                    <br />
                    <br />
                    <br>

                    <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsee11" placeholder=" proposition 1" /> </div>
                    <br>
                    <div class="col-1"> <input  type="radio" for="reponsee1" name="qcm11" value="true" /> </div>

                    <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsee21" placeholder=" proposition 2" /> </div>
                    <br>
                    <div class="col-1"> <input  type="radio" for="reponsee2" name="qcm21" value="true" /> </div>

                    <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsee31" placeholder=" proposition 3" /> </div>
                    <br>
                    <div class="col-1"> <input  type="radio" for="reponsee3" name=" qcm31" value="true" /> </div>
                    <div class="col"> <input required type=" text " size="10" class=" form-control" name="reponsee41" placeholder=" proposition 4" /> </div>
                    <br>
                    <div class="col-1"> <input  type="radio" for="reponsee4" name=" qcm41" value="true" /> </div>

                    <br />
                    <br />
                </div>



            </div>

            <h6>RM:Cliquez sur + pour ajouter un champs de QCM.<input name="compteurqcm" id="compteurqcm" type="number" value="1" size="2" hidden> </h6>

            <input type="button" class=" bg-info" value="+" onclick="addEqcm()" />



        </div>
    </div>




    <button  type="submit" class="btn btn_contact ">Enregistrer la leçon <i class="fa fa-check"></i></button>
    </form>
    </div>
    </div>

    </div>
    </div>






    </div>


<script>



    function addEqcm() {

        var div = document.getElementById("qcm");
        var question = document.createElement("input");
        var reponse1 = document.createElement("input");
        var reponse2 = document.createElement("input");
        var reponse3 = document.createElement("input");
        var reponse4 = document.createElement("input");
        var choix1 = document.createElement("input");
        var choix2 = document.createElement("input");
        var choix3 = document.createElement("input");
        var choix4 = document.createElement("input");
        var br = document.createElement("br");
        var btn = document.getElementById("compteurqcm");
        var plus = btn.value = parseInt(btn.value) + 1;
        var div1 = document.createElement("div");
        div2 = document.createElement("div");
        div2.className = "row";
        div1.className = "row";
        question.name = "evaluation" + plus;

        question.className = "form-control";
        question.type = "text";
        question.placeholder = "saisir la question " + plus;
        question.size = "50";
        question.required = " required";

        reponse1.name = "reponsee1" + plus;
        reponse1.type = "text";
        reponse1.placeholder = " proposition 1";
        reponse1.size = "10";
        reponse1.className = "form-control";
        reponse1.required = " required";

        reponse2.name = "reponsee2" + plus;
        reponse2.type = "text";
        reponse2.placeholder = " proposition " + 2;
        reponse2.size = "10";
        reponse2.className = "form-control";
        reponse2.required = " require";
        reponse3.name = "reponsee3" + plus;
        reponse3.type = "text";
        reponse3.placeholder = " proposition 3";
        reponse3.size = "10";
        reponse3.className = "form-control";
        reponse3.required = " required";

        reponse4.name = "reponsee4" + plus;
        reponse4.type = "text";
        reponse4.placeholder = " proposition 4";
        reponse4.size = "10";
        reponse4.className = "form-control";
        reponse4.required = " required";


        choix1.type = "radio";
        choix1.name = "qcm1" + plus;
        choix1.value = "true";


        choix2.type = "radio";
        choix2.name = "qcm2" + plus;
        choix2.value = "true";

        choix3.type = "radio";
        choix3.name = "qcm3" + plus;
        choix3.value = "true";

        choix4.type = "radio";
        choix4.name = "qcm4" + plus;
        choix4.value = "true";
        div1.appendChild(br);
        div1.appendChild(br);
        div1.appendChild(br);


        div1.appendChild(question);

        div1.appendChild(br);
        div1.appendChild(br);
        div1.appendChild(br);



        div21 = document.createElement("div");
        div22 = document.createElement("div");
        div23 = document.createElement("div");
        div24 = document.createElement("div");
        div25 = document.createElement("div");
        div26 = document.createElement("div");
        div27 = document.createElement("div");
        div28 = document.createElement("div");
        div21.className = "col-1";
        div23.className = "col-1";
        div25.className = "col-1";
        div22.className = "col";
        div24.className = "col";
        div26.className = "col";
        div27.className = "col-1";
        div28.className = "col";
        div21.appendChild(choix1);
        div22.appendChild(reponse1);
        div23.appendChild(choix2);
        div24.appendChild(reponse2);
        div25.appendChild(choix3);
        div26.appendChild(reponse3);
        div27.appendChild(choix4);
        div28.appendChild(reponse4);


        div2.appendChild(div22);
        div2.appendChild(div21);
        div2.appendChild(div24);
        div2.appendChild(div23);
        div2.appendChild(div26);
        div2.appendChild(div25);
        div2.appendChild(div28);
        div2.appendChild(div27);

        div.appendChild(div1);
        div.appendChild(document.createElement("br"));
        div.appendChild(div2);
        div.appendChild(br);



        }
    </script>


@endsection




































































































































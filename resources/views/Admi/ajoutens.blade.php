@extends('index')

@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url(images/slider_inclass.jpg); background-attachment: fixed; background-position: 50% 50%;">
    <div class="breadcrumb_wrap_inner">
    <div class="container">
    <h1>Nouveau enseignant</h1>
    <ul class="breadcrumbs">
    <li><a href="index.html">Accueil</a> /</li>
    <li>Ajouter une classe</li>
    </ul>
    </div>
    </div>
    </div>


    <div id="contact_wrap" class="contact_wrap">
    <div class="container">



    <div class="">
    <h3>Entrer les informations de l'enseignant</h3>
    <p></p>
    <div class="contact_form">
    <form method="POST" action="{{ route('storeens') }}">
        @csrf
    <input class="form-control" placeholder="Nom de l'enseignant" name="name" type="text" required>
    <input class="form-control" placeholder="Prénom de l'enseignant" name="prenom" type="text" required>
    <input class="form-control" placeholder="Adresse mail de l'enseignant" name="email" type="email" required>
    <input class="form-control" placeholder="Téléphone de l'enseignant" name="tel" type="text" required>
    <input class="form-control" placeholder="mot de passe" name="password" type="password" required>


    <div class="row form-group">
        <div class="col "><label class=" form-control-label">Choisir les classes :</label></div>
        <div class="col ">
            <div class="form-check">
                    @foreach (DB::table('classes')->get() as $class )
                    <div class="checkbox">
                        <label for="checkbox1" class="form-check-label ">
                            <input type="checkbox" id="checkbox1" name="classe{{ $class->id }}" value="{{ $class->id }}" class="form-check-input">{{ $class->nom }}
                        </label>
                    </div><br>
                    @endforeach



            </div>
        </div>
    </div>

    <input hidden value="2" name="type_user" type="number">
     <button type="submit" class="btn btn_contact">Enregistrer <i class="fa fa-check"></i></button>
    </form>
    </div>
    </div>

    </div>
    </div>






    </div>


@endsection




































































































































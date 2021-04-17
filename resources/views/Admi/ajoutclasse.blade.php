@extends('index')

@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url(images/slider_inclass.jpg); background-attachment: fixed; background-position: 50% 50%;">
    <div class="breadcrumb_wrap_inner">
    <div class="container">
    <h1>Nouvelle classe</h1>
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
    <h3>Entrer les informations de la classe</h3>
    <p></p>
    <div class="contact_form">
    <form method="POST" action="{{ route('storeclass') }}">
        @csrf
    <input class="form-control" placeholder="Nom de la classe" name="nom" type="text">
    <textarea class="form-control" rows="5" placeholder="Une description de la classe" name="description"></textarea>
    <button type="submit" class="btn btn_contact">Enregistrer <i class="fa fa-check"></i></button>
    </form>
    </div>
    </div>

    </div>
    </div>






    </div>


@endsection




































































































































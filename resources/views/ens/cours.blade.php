@extends('index')

@section('content')

<div class="content_wrapper">

<div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url({{ asset('images/instructor.png') }}) no-repeat; background-attachment: fixed; background-position: top left; background-size: cover;">
    <div class="breadcrumb_wrap_inner">
    <div class="container">
    <h1>Enseignants</h1>
    <ul class="breadcrumbs">
    <li><a href="{{ route('dashboard') }}">Accueil</a> /</li>
    <li>Liste des Leçons de la classe {{ $classe->nom }} </li>
    </ul>
    </div>
    </div>
    </div>

    <br>
    <br>

    @foreach ($cours as $cour )

    <div class="wrapper_faculty">
        <div class="">
        <div class="faculty_block">

        <div class="science">
        <div class="faculty_info">
        <h4>Unité : <a>{{ $cour->unite }}</a></h4>
        <h5>Titre : {{ $cour->titre }}</h5>
        <h5>Date de publication :  {{ $cour->created_at }}</h5>
        <h5>Auteur : {{  DB::table('users')->find($cour->idU)->name }}</h5>
        <p>Classe :  {{ $classe->nom }}
        </p>
     <a href="{{ route('lecon',$cour->id) }}"> voir la leçon</a>
            </div>
        </div>
        </div>
        </div>


        <br>
        <br>
    </div>

    @endforeach



<div class="clearfix"></div>





<div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">




</div>
</div>
@endsection

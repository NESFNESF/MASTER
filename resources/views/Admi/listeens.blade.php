@extends('index')

@section('content')

<div class="content_wrapper">

<div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url(images/instructor.png) no-repeat; background-attachment: fixed; background-position: top left; background-size: cover;">
    <div class="breadcrumb_wrap_inner">
    <div class="container">
    <h1>Enseignants</h1>
    <ul class="breadcrumbs">
    <li><a href="{{ route('dashboard') }}">Accueil</a> /</li>
    <li>Liste des enseignants</li>
    </ul>
    </div>
    </div>
    </div>

    <br>
    <br>

    @foreach (DB::table('users')->where('type_user',2)->get() as $use )

    <div class="wrapper_faculty">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="faculty_block">

        <div class="science">
        <div class="faculty_info">
        <h4><a>{{ $use->name }}</a></h4>
        <h5>{{ $use->prenom }}</h5>
        <h5>{{ $use->tel }}</h5>
        <h5>{{ $use->email }}</h5>
        <p>Classes : classes </p>
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

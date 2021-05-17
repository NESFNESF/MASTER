@extends('index')

@section('content')

<div class="content_wrapper">


    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url({{ asset('images/instructor.png') }}) no-repeat; background-attachment: fixed; background-position: top left; background-size: cover;">
        <div class="breadcrumb_wrap_inner">
        <div class="container">
        <h1>Enseignants</h1>
        <ul class="breadcrumbs">
        <li><a href="{{ route('dashboard') }}">Accueil</a> /</li>
        <li>Liste des Leçons de la classe </li>
        </ul>
        </div>
        </div>
        </div>

        <br>
        <br>



        <div id="dtl_wrap" class="dtl_wrap">

            <div class="container">

            <div class="dtl_wrapper col-lg-9 col-md-8 col-sm-12 col-xs-12">

            <div class="dtl_inner_wrap">

            <div class="dtl_inner last">
            <div class="dtl_head">
            <h1>{{ $cours->titre }}</h1>

            </div>
            <div class="dtl_block">

            <div class="detail_text_wrap">
            <div class="info_wrapper">
            <div class="info_head">
            <h4>INDICATEURS DE COMPÉTENCE</h4>

            @foreach (explode('$',$cours->indicateur) as $ligne)
            <p>- {{ $ligne }}</p>
            @endforeach



            </div>
            </div>
            <div class="info_wrapper">
            <div class="info_head">
            <h4>SITUATION DE VIE</h4>
            </div>
            <p>{{ $cours->situation }}</p>

            </div>
            <div class="info_wrapper">
            <div class="info_head">
            <h4>CONTENU DE LA LEÇON</h4>
            </div>
            <p>{{ $cours->contenu }}</p>

            </div>

            <div class="info_wrapper">
                <div class="info_head">
                <h4>SUPPORT NUMÉRIQUE </h4>
                </div>
                <p>

                <embed src="{{ asset('Cours/'.$cours->fichier) }}" width="800" height="500"  type="application/pdf"/>

              </p>
                <h6>{{ $cours->titre }}</h6>

                </div>
            </div>
            </div>
            </div>




            <div class="mt_5">


             <a href="{{ route('evaluation',$cours->id) }}" class="btn hookup_btn">Je m'évalue <i class="fa fa-reply"></i></a>
            </div>


            </div>

            <div class="clearfix"></div>
            </div>


            <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">



            <div class="course_tutor">
            <h4>Informations sur la leçon</h4>
            <ul>
            <li>

            <div class="tutor_info">
            <h5>
            <u>Auteur de la leçon</u> :

            </h5>
            <p>{{ DB::table('users')->where('id',$cours->idU)->value('name')  }} {{  DB::table('users')->where('id',$cours->idU)->value('prenom') }}</p>
            </div>
            </li>
            <li>

                <div class="tutor_info">
                <h5>
                <u>Date de publication</u> :

                </h5>
                <p>{{ $cours->created_at }}</p>
                </div>
                </li>
                <li>

                    <div class="tutor_info">
                    <h5>
                    <u>Unité</u> :

                    </h5>
                    <p>{{ $cours->unite }} </p>
                    </div>
                    </li>



            </ul>
            </div>





            </div>

            </div>

            </div>








<div class="clearfix"></div>





<div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">




</div>
</div>
@endsection

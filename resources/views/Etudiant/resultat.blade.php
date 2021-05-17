@extends('index')

@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url(images/slider_inclass.jpg); background-attachment: fixed; background-position: 50% 50%;">
    <div class="breadcrumb_wrap_inner">
    <div class="container">
    <h1>ÉVALUATION</h1>
    <ul class="breadcrumbs">
    <li><a href="{{ route('dashboard') }}">Accueil</a> /</li>
    <li>Je m'évalue</li>
    </ul>
    </div>
    </div>
    </div>


    <div id="contact_wrap" class="contact_wrap">
    <div class="container">



    <div class="">
    <h3>ÉVALUATIONS</h3>

    <div class="contact_form">



    <div class="">
        <label class=" form-control-label">Mes résultats  <br/> Partie QCM :  </label>
      <div class="input-group">
@php
    $i = 1;
    $compte= 0;
@endphp

        @foreach ( $cours as $qcm )

        <div class="faculty_info">
            <h4><a> {{ $i }} - {{ $qcm->description }}</a></h4>
            <br>
            <div class="row">


                <div class="col">

                  <h6> a )


                @if ($request->input('qcm'.$qcm->id) == $qcm->qcm1)

                @if ($request->input('qcm'.$qcm->id) == $qcm->reponse)

                    <span class="text-success">{{ $qcm->qcm1 }} (bonne réponse)</span>
                    @php
                        $compte = $compte + 1;
                    @endphp
                @else
                <span class="text-danger">{{ $qcm->qcm1 }} (mauvaise réponse)</span>
                @endif

            @else
            {{ $qcm->qcm1 }}
            @endif


                  </h6>
                </div>


                <div class="col">
                    <h6>b )
                        @if ($request->input('qcm'.$qcm->id) == $qcm->qcm2)

                        @if ($request->input('qcm'.$qcm->id) == $qcm->reponse)

                            <span class="text-success">{{ $qcm->qcm2 }} (bonne réponse)</span>
                            @php
                                $compte = $compte + 1;
                            @endphp
                        @else
                        <span class="text-danger">{{ $qcm->qcm2 }} (mauvaise réponse)</span>
                        @endif

                    @else
                    {{ $qcm->qcm2 }}
                    @endif
        </h6>
                </div>
                <div class="col">
                    <h6>c )
                        @if ($request->input('qcm'.$qcm->id) == $qcm->qcm3)

                        @if ($request->input('qcm'.$qcm->id) == $qcm->reponse)

                            <span class="text-success">{{ $qcm->qcm3 }} (bonne réponse)</span>
                            @php
                                $compte = $compte + 1;
                            @endphp
                        @else
                        <span class="text-danger">{{ $qcm->qcm3 }} (mauvaise réponse)</span>
                        @endif

                    @else
                    {{ $qcm->qcm3 }}
                    @endif
        </h6>
                </div>
                <div class="col">
                    <h6>d )
                        @if ($request->input('qcm'.$qcm->id) == $qcm->qcm4)

                        @if ($request->input('qcm'.$qcm->id) == $qcm->reponse)

                            <span class="text-success">{{ $qcm->qcm4 }} (bonne réponse)</span>
                            @php
                                $compte = $compte + 1;
                            @endphp
                        @else
                        <span class="text-danger">{{ $qcm->qcm1 }} (mauvaise réponse)</span>
                        @endif

                    @else
                    {{ $qcm->qcm4 }}
                    @endif
        </h6>
                </div>
              </div>
            </div>

            <br><br><br>
            @php
                $i = $i + 1;
            @endphp

        @endforeach













      </div>

      @php

      $note = ($compte/($i - 1) )*100;
      if( $note < 50) {
           echo '<span class = "text-danger" ><strong> POURCENTAGE  : '.$note.'</strong></span>';
      } else {
          echo '<span class = "text-success" ><strong> POURCENTAGE  : '.$note.'</strong></span>';
      }


     @endphp



    </div>




    @if ($note < 50)
    <a  href="{{ route('lecon_et',$cours[0]->idC) }}" class="btn btn_contact ">Vous avez échoué : recommencé la leçon  <i class="fa fa-check"></i></a>

    @else

    <a  href="{{ route('pdf') }}"  class="btn btn_contact ">Félicitation vous avez réussi : télécharger votre attestation  <i class="fa fa-check"></i></a>

    @endif



    </div>
    </div>

    </div>
    </div>






    </div>



@endsection




































































































































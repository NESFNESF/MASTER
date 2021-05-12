@extends('index')

@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url(images/slider_inclass.jpg); background-attachment: fixed; background-position: 50% 50%;">
    <div class="breadcrumb_wrap_inner">
    <div class="container">
    <h1>ÉVALUATION</h1>
    <ul class="breadcrumbs">
    <li><a href="index.html">Accueil</a> /</li>
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
    <form method="POST" action="{{ route('storeeval',$cours[0]->idC) }}" enctype="multipart/form-data">
        @csrf

    <div class="">
        <label class=" form-control-label">Evaluation  <br/> Partie QCM : (Choisissez unique la réponse parmi les 4 proposées qui est vraie) </label>
      <div class="input-group">



        @php
        $i = 1;
        @endphp


        @foreach ( $cours as $eval )

        <div class="faculty_info">
            <h4><a> {{ $i }} - {{ $eval->description }}</a></h4>
            <br>
            <div class="row">
                <div class="col">
                  <h6> a ) {{ $eval->qcm1 }} </h6> <input name="qcm{{ $eval->id }}" type="radio" value="{{ $eval->qcm1 }}" required/>
                </div>
                <div class="col">
                    <h6>b ) {{ $eval->qcm2 }}</h6>  <input name="qcm{{ $eval->id }}" type="radio" value="{{ $eval->qcm2 }}" required/>
                </div>
                <div class="col">
                    <h6>c ) {{ $eval->qcm3 }}</h6> <input name="qcm{{ $eval->id }}" type="radio" value="{{ $eval->qcm3 }}" required/>
                </div>
                <div class="col">
                    <h6>d ) {{ $eval->qcm4 }}</h6>  <input name="qcm{{ $eval->id }}" type="radio" value="{{ $eval->qcm4 }}" required/>
                </div>
              </div>
            </div>

            <br><br><br>
            @php
                $i = $i + 1;
            @endphp

        @endforeach


      </div>



    </div>




    <button  type="submit" class="btn btn_contact ">J'ai fini <i class="fa fa-check"></i></button>
    </form>
    </div>
    </div>

    </div>
    </div>






    </div>



@endsection




































































































































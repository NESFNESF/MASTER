@extends('index')

@section('content')

<div class="content_wrapper">

    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url({{ asset('images/instructor.png') }}); background-attachment: fixed; background-position: 50% 50%;">
    <div class="breadcrumb_wrap_inner">
    <div class="container">
    <h1>Evaluation</h1>
    <ul class="breadcrumbs">
    <li><a href="{{ route('dashboard') }}">Accueil</a> /</li>
    <li>Evaluation</li>
    </ul>
    </div>
    </div>
    </div>


    <div id="contact_wrap" class="contact_wrap">
    <div class="container">



    <div class="">
    <h3>QUESTION À CHOIX MULTIPLES </h3>

    <div class="contact_form">
    <form method="POST" action="{{ route('storelecon') }}" enctype="multipart/form-data">
        @csrf



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
                  <h6> a ) {{ $eval->qcm1 }} </h6><input  type="radio" name=@php echo "test".$i; @endphp  name=@php echo "q1".$i; @endphp   />
                </div>
                <div class="col">
                    <h6>b ) {{ $eval->qcm1 }}</h6> <input  type="radio" name=@php echo "test".$i; @endphp name=@php echo "q2".$i; @endphp  />
                </div>
                <div class="col">
                    <h6>c ) {{ $eval->qcm1 }}</h6> <input  type="radio"  name=@php echo "test".$i; @endphp name=@php echo "q3".$i; @endphp />
                </div>
                <div class="col">
                    <h6>d ) {{ $eval->qcm1 }}</h6> <input  type="radio" name=@php echo "test".$i; @endphp name=@php echo "q4".$i; @endphp  />
                </div>
              </div>
            </div>

            <br><br><br>
            @php
                $i = $i + 1;
            @endphp

        @endforeach





      </div>








    </form>
    </div>
    </div>

    </div>
    </div>






    </div>



@endsection




































































































































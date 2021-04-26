@extends('index')

@section('content')

<div class="content_wrapper">


    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url({{ asset('images/instructor.png') }}) no-repeat; background-attachment: fixed; background-position: top left; background-size: cover;">
        <div class="breadcrumb_wrap_inner">
        <div class="container">
        <h1>FORUM</h1>
        <ul class="breadcrumbs">
        <li><a href="{{ route('dashboard') }}">Accueil</a> /</li>
        <li>Discussions </li>
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






            <div class="dtl_related_article">
            <h4>Commentaires</h4>
            <div class="head_underline"></div>
            <ul class="commentlist">



                @foreach ($commentaires as  $commen)

                    @if (Auth::user()->id == DB::table('users')->where('id',$commen->idU)->value('id'))

                    <li class="comment">
                        <div class="comment-wrapper">
                        <div class="comment-author vcard">
                        <p class="gravatar"><a href="#"><img alt="avatar" src="{{ asset('images/5.jpg') }}"></a></p>
                        <span class="author">{{ DB::table('users')->where('id',$commen->idU)->value('name') }}<a class="comment_reply" > ( moi )</a></span>
                        </div>
                        <div class="comment-meta">
                        <span class="entry-date">{{ $commen->created_at }}</span>.
                          </div>
                        <div class="comment-body">
                            {{ $commen->description }}
                        </div>
                        </div>
                        </li>
                    @else
     <li class="comment">
                    <div class="comment-wrapper">
                    <div class="comment-author vcard">
                    <p class="gravatar"><a href="#"><img alt="avatar" src="{{ asset('images/5.jpg') }}"></a></p>
                    <span class="author">{{ DB::table('users')->where('id',$commen->idU)->value('name') }}</span>
                    </div>
                    <div class="comment-meta">
                    <span class="entry-date">{{ $commen->created_at }}</span>.

                    </div>
                    <div class="comment-body">
                        {{ $commen->description }}
                    </div>
                    </div>
                    </li>
                    @endif


                @endforeach





            </ul>
            </div>


            <div class="comments-form-wrapper clearfix">
            <h5>Formulaire</h5>
            <form class="comment-form" action="{{ route('storecommen') }}" method="post" id="postComment">
                @csrf


            <div class="field aw-blog-comment-area">
            <label for="comment">Poster un commentaire <em class="required">*</em></label>
            <textarea rows="5" cols="50" class="input-text"  placeholder="commentaire ..." id="comment" name="comment" required></textarea>
            </div>
            <div class="mt_5">
            <input type="number" value="{{ Auth::user()->id }}" name="idU" hidden>
            <input type="number" value="{{ $id }}" name="idC" hidden>
            <button type="submit" class="button continue">Ajouter mon commentaire</button>
            </div>
            </form>
            </div>

            </div>
            </div>








            <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">









            </div>

            </div>
            </div>









<div class="clearfix"></div>





<div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">




</div>
</div>
@endsection

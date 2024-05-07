@extends('user.layouts.layout')

@section('content')
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-12">
            <p class="mb-5"><img src="{{ $posts->getImage() }}" class="img-fluid"></p>

            <div class="row">
              <div class="col-xl-8 col-lg-12 mx-auto">
                <h1 class="mb-5">{{ $posts->title }}</h1>
                <p>Опубликовано: {{ $posts->getPostDate() }}</p>
                <p>Просмотры: {{ $posts->views }}</p>
                <p style="opacity: 50%">Категория: <a href="{{ route('user.category', ['slug' => $posts->category->slug ])  }}">{{ $posts->category->title }}</a></p>
                <p style="opacity: 50%"> Теги: 
                @foreach ($posts->tags as $tag)   
                <a href="{{ route('user.tag', ['slug' => $tag->slug ])  }}">{{ $tag->title }}</a>
                @endforeach
                </p>
                {!! $posts->description !!}
                {!! $posts->content !!}
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- END row -->
@endsection
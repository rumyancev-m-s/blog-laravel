@extends('user.layouts.layout')

@section('content')

<main role="main" class="probootstrap-main js-probootstrap-main">
      <div class="probootstrap-bar">
        <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
        <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-12">
            <p class="mb-5"><img src="{{ $posts->getImage() }}" class="img-fluid"></p>

            <div class="row">
              <div class="col-xl-8 col-lg-12 mx-auto">
                <h1 class="mb-5">{{ $posts->title }}</h1>
                <p>Опубликовано: {{ $posts->getPostDate() }}</p>
                <p style="opacity: 50%">Категория: {{ $posts->category->title }}</p>
                @foreach ($posts->tags as $tag)
                <p style="opacity: 50%"> Теги: {{ $tag->title }}</p>
                @endforeach
                {!! $posts->description !!}
                {!! $posts->content !!}
              </div>
            </div>
          </div>
        </div>
        <!-- END row -->
@endsection
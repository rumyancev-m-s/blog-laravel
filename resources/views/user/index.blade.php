@extends('user.layouts.layout')

@section('content')

<div class="card-columns">
    @if(count($posts))
        @foreach($posts as $post)
            <div class="card">
                <a href="{{ route('user.single', ['slug' => $post->slug ]) }}">
                <img class="card-img-top probootstrap-animate" src="images/img_1.jpg" alt="Card image cap">
            </a>
        </div>
    </div>
@endforeach
@endif
@endsection
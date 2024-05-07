@extends('user.layouts.layout')

@section('content')
    @if(count($posts))
<h2>{{ $tag->title }}</h2>
    <div class="card-columns">
        @foreach($posts as $post)
            <div class="card">
                <a href="{{ route('user.single', ['slug' => $post->slug ]) }}">
                <img class="card-img-top probootstrap-animate" src="{{ $post->getImage() }}" alt="Card image cap">
            </a>
        </div>
@endforeach
</div>
@endif
@endsection
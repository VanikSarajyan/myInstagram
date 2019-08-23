@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3 mb-3">
                <a href="/profile/{{ $post->user->id }}" class="d-flex">
                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle pr-3" style="max-width:50px"/>
                    <h3 class="text-dark">{{ $post->user->username }}</h3>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <p>
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark"><strong>{{ $post->user->username }}</strong></span>
                    </a> 
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
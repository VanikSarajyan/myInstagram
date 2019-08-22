@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-between">
                <a href="/profile/{{ $post->user->id }}">
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle pr-3" style="max-width:50px"/>
                        </div>
                        <div>
                            <span class="text-dark"><h3>{{ $post->user->username }}</h3></span>
                        </div>
                    </div>
                </a>
                <a href="#">Follow</a>
            </div>
            <hr><br>
            <p>
                <a href="/profile/{{ $post->user->id }}">
                    <span class="text-dark"><strong>{{ $post->user->username }}</strong></span>
                </a> 
                {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection
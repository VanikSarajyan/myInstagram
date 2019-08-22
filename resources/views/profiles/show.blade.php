@extends('layouts.app')

@section('pageTitle', "@{$user->username}")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1 class="pr-5">{{$user->username}}</h1>
                @can('update', $user->profile)
                    <div>
                        <a href="/profile/{{$user->id}}/edit"><button class="btn btn-default pr-5"><strong>Edit Profile</strong></button></a>
                        <button class="btn btn-default pr-5">*</button>
                    </div>
                    <a href="/p/create">New Post</a>
                @endcan
            </div>
            <div>
                <span class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</span>
                <span class="pr-5"><strong>66</strong> followers</span>
                <span class="pr-5"><strong>58</strong> following</span>
            </div>
            <div class="pt-4">
                <strong>{{$user->profile->title}}</strong>
                <p>{{$user->profile->description}}</p>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4 pt-4">
                <a href="/p/{{$post->id}}"><img src="/storage/{{ $post->image}}" class="w-100"/></a>
            </div>
        @endforeach
    </div>
</div>
@endsection

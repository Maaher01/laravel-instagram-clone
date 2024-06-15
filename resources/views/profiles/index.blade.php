@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-50 h-75">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex gap-4 align-items-baseline justify-content-between">
                <div class="d-flex align-items-baseline gap-4 mb-3">
                    <h4>{{ $user->handle }}</h4>
                    <div id="follow-button" user-id="{{ $user->id }}" follows="{{ $follows ? 'true' : 'false' }}"></div>
                </div>
                <div>
                    @can('update', $user->profile)
                        <a href="/post/create" class="btn btn-secondary">+ New Post</a>
                    @endcan
                    @can('update', $user->profile)
                        <a href="/profile/{{ $user->id }}/edit" class="btn btn-secondary">Edit Profile</a>
                    @endcan
                </div>
            </div>
            <div class="d-flex gap-4">
                <div><strong>{{ $postCount }}</strong> posts</div>
                <div><strong>{{ $followersCount }}</strong> followers</div>
                <div><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-1"><strong>{{ $user->name }}</strong></div>
            <div class="pt-1">{{ $user->profile->biography }}</div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/post/{{ $post -> id }}">
                <img class="w-100" src="/storage/{{ $post->image }}">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 p-5">
            <img src="/images/profile_img.jpg" class="rounded-circle">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex gap-4 align-items-baseline justify-content-between">
                <h4>{{ $user->handle }}</h4>
                <div>
                    <a href="/post/create" class="btn btn-secondary">+ New Post</a>
                    <a href="/home/{{ $user->id }}/edit" class="btn btn-secondary">Edit Profile</a>
                </div>
            </div>
            <div class="d-flex gap-4">
                <div><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div><strong>133</strong> followers</div>
                <div><strong>127</strong> following</div>
            </div>
            <div class="pt-1"><strong>{{ $user->name }}</strong></div>
            <div class="pt-1">{{ $user->biography }}</div>
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
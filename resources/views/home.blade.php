@extends('layouts.app')
@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-2 offset-3">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a> 
            </div>
        </div>

        <div class="row pt-2 pb-4">
            <div class="col-2 offset-3">
                <div>
                    <p class="d-flex gap-2">
                        <span>
                            <a class="text-decoration-none" href="/home">
                                <span class="fw-bold text-dark">{{ $post->user->name }}</span>
                            </a>
                        </span>
                        {{ $post->caption }}
                    </p>
                    <hr>
                    <p>{{ $post->created_at }}</p>
                </div>
            </div>  
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    @endforeach
</div>
@endsection
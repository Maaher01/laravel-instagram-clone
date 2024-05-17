@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center gap-3">
                    <div>
                        <img src="/storage/{{ $post->user->image }}" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="d-flex gap-3">
                            <a class="text-decoration-none" href="/home">
                                <span class="fw-bold text-dark">{{ $post->user->name }}</span>
                            </a>
                            <a class="text-decoration-none fw-bold" href="#">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
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
    @endsection
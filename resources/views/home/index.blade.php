@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 p-5">
            <img src="/images/profile_img.jpg" class="rounded-circle" >
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex gap-4 align-items-baseline justify-content-between">
                <h4>{{ $user->handle }}</h4>
                <button class="btn btn-secondary">+ New</button>
            </div>
            <div class="d-flex gap-4">
                <div><strong>3</strong> posts</div>
                <div><strong>133</strong> followers</div>
                <div><strong>127</strong> following</div>
            </div>
            <div class="pt-1"><strong>{{ $user->name }}</strong></div>
            <div class="pt-1">{{ $user->biography }}</div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100 h-75" src="/images/Dolphin.png" >
        </div>
        <div class="col-4">
            <img class="w-100 h-75" src="/images/Pollution.jpg" >
        </div>
        <div class="col-4">
            <img class="w-100 h-75" src="/images/Cyclist.png" >
        </div>
    </div>
</div>
@endsection

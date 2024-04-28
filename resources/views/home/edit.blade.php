@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/home/{{ $user->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <h1>Edit Profile</h1>
                </div>

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="handle" class="col-md-4 col-form-label">{{ __('Handle') }}</label>
                    <input id="handle" type="text" class="form-control @error('handle') is-invalid @enderror" name="handle" value="{{ old('handle') ?? $user->handle }}" required autocomplete="handle" autofocus>
                    @error('handle')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="biography" class="col-md-4 col-form-label">{{ __('Biography') }}</label>
                    <input id="biography" type="text" class="form-control @error('biography') is-invalid @enderror" name="biography" value="{{ old('biography') ?? $user->biography }}" required autocomplete="biography" autofocus>
                    @error('biography')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label">{{ __('Email') }}</label>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>
                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> -->

                <div class="row pt-4">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Save') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
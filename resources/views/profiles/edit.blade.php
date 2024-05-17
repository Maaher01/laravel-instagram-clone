@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <h1>Edit Profile</h1>
                </div>

                <div class="row mb-3">
                    <label for="biography" class="col-md-4 col-form-label">{{ __('Biography') }}</label>
                    <input id="biography" type="text" class="form-control @error('biography') is-invalid @enderror" name="biography" value="{{ old('biography') ?? $user->profile->biography }}" autocomplete="biography" autofocus>
                    @error('biography')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>
                    <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

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
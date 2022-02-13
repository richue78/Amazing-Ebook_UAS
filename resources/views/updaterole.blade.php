@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            <div class="card" >
                <p>{{ $users->first_name }} {{ $users->middle_name }} {{ $users->last_name }}</p>
            </div>
        </div>

    </div>
    <form method="POST" action="/updaterole/edit/{{ $users->id }}">
       @csrf
        <div class="row mb-3">
            <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('messages.Role') }}</label>

            <div class="col-md-6">
                <select class="col-md-12 form-control text-md-end @error('id') err-box @enderror" name="id" id="id">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @if ($role->id == old('id'))
                            selected
                        @endif>{{ $role->role_desc }}</option>
                    @endforeach
                </select>
                @error('id') <p class="err-msg margin-left">{{ $message }}</p> @enderror

                @error('id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('messages.Save') }}
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
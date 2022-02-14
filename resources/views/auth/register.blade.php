@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
        <h2> {{ __('messages.Register') }}</h2>
    </div>
          <div class="container">
                 <div class="d-flex justify-content-center">
                 <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="row col mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('messages.First Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}"  autocomplete="first_name" autofocus>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row col mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('messages.Middle Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}"  autocomplete="middle_name" autofocus>
                                @error('middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('messages.Last Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name" autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('messages.Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('messages.Gender') }}</label>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">{{ __('messages.Male') }}</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">{{ __('messages.Female') }}</label>
                                  </div>
                                @error('gender_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('messages.Role') }}</label>
                            <div class="col-md-6">
                                <select name="role_id" class="form-select form-select-sm form-control form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}"  autocomplete="role_id" aria-label=".form-select-sm example">
                                    @foreach ($roles as $role)   
                                    <option value="{{ $role->id }}">{{ $role->role_desc }}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('messages.Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('messages.Display Picture') }}</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control @error('password') is-invalid @enderror" name="display_picture_link"  autocomplete="new-password">
                                @error('display_picture_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('messages.Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection

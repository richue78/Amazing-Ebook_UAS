@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
                    <h3>{{ __('messages.Update') }}</h3>
                </div>
<div class="container">
    <div class="d-flex justify-content-center">
               
                    <form method="POST" action="/profile/edit" enctype='multipart/form-data'>
                        @csrf
                        <div class="mb-3 d-flex justify-content-center">
                        <img src="images/{{ $users->display_picture_link }}" style="width: 200px; height: 200px" alt="storage-images" class="card-img-top" style="height: 20rem">
                        </div>
                        <div class="row">
                        <div class="col row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{__('messages.First Name: ')}}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name', $users->first_name) }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col row mb-3">
                            <label for="middle_name" class="col-md-4 col-form-label text-md-end">{{ __('messages.Middle Name') }}</label>
                            <div class="col-md-6">
                                <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name', $users->middle_name) }}" autocomplete="middle_name" autofocus>
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
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('messages.Last Name') }}</label>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name', $users->last_name) }}" required autocomplete="last_name" autofocus>
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $users->email) }}" required autocomplete="email">
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
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('messages.Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col row mb-3">
                            <label for="display_picture_link" class="col-md-4 col-form-label text-md-end">{{ __('messages.Display Picture') }}</label>
                            <div class="col-md-6">
                                <input id="display_picture_link" type="file"  class="@error('display_picture_link') is-invalid @enderror" name="display_picture_link" value="{{ old('display_picture_link', $users->display_picture_link) }}" autofocus>
                                @error('display_picture_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        </div>

                        <div class="row">
                        <div class="col row mb-3">
                            <label for="role_id" class="col-md-4 col-form-label text-md-end" >{{ __('messages.Role') }}</label>
                            <div class="col-md-6">
                                <p class="form-control" name="role_id" id="role_id" >{{ old('role_id', $roles->role_desc) }} </p>
                                @error('role_id') <p class="err-msg margin-left">{{ $message }}</p> @enderror
                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col row mb-3">
                            <label for="gender_id" class="col-md-4 col-form-label text-md-end">{{ __('messages.Gender') }}</label>
                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender_id" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">{{ __('messages.Male') }}</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender_id" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">{{ __('messages.Female') }}</label>
                                </div>
                                @error('gender_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="mb-5 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('messages.Save') }}
                                </button>
                             </div>
                    </form>
        </div>
    
</div>
            
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="container">
            <div class="d-flex justify-content-center">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">{{ __('messages.Account') }}</th>
                        <th scope="col">{{ __('messages.Action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                      <tr>
                        <td>
                            <p>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} - {{ $user->role->role_desc }}</p>
                        </td>
                        <td>
                          <a href="/updaterole/{{$user->id}}">
                            {{ __('messages.Update Role') }}
                          </a>
                          <form method="POST" action="/delete/{{$user->id}}">
                            @csrf
                         
                              <button type="submit" class="btn btn-primary">
                                {{ __('messages.Delete') }}
                            </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
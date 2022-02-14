@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">{{ __('messages.Title') }}</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($carts as $cart)      
              <tr>
                <td>{{ $cart->ebook->title }}</td>
                <td>
                    <form action="/cart/{{ $cart->id }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i>{{ __('messages.Delete') }}</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
<div class="mt-3 d-flex justify-content-center" >
  <a class="btn btn-warning" href="/submit">{{ __('messages.Submit') }}</a>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <div>
            {{ __('messages.Ebook Detail') }}
        </div>
        <div class="mt-5">
            {{ __('messages.Title') }} : {{$ebookdetail->title}} <br>
            {{ __('messages.Author') }} : {{$ebookdetail->author}} <br>

            {{ __('messages.Description') }} : 
            <br><br>
            {{$ebookdetail->description}}
        </div>


        <form action="/addToCart/{{ $ebookdetail->id }}" method="post">
            @csrf
            <button class="btn btn-primary">{{ __('messages.Rent') }}</button>
        </form>

    </div>
</div>
@endsection

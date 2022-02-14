@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
            <h2>{{ __('messages.Ebook Detail') }}</h2>
        </div>
<div class="container">
    <div class="row">
        <div class="mt-5">
            <h4>{{ __('messages.Title') }} : {{$ebookdetail->title}}</h4> 
            <h4>{{ __('messages.Author') }} : {{$ebookdetail->author}} </h4>

            <h4>{{ __('messages.Description') }} :</h4>
            {{$ebookdetail->description}}
        </div>

    </div>
</div>
<div class="d-flex justify-content-center">
    <form action="/addToCart/{{ $ebookdetail->id }}" method="post">
            @csrf
            <button class="btn btn-primary">{{ __('messages.Rent') }}</button>
        </form>
    </div>

@endsection

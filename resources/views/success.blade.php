@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
         <div class="Border_back">
             <div class=" ">
                 <p class=" ">{{ __('messages.Success!') }}</p>
            
                 <a href="/home">{{ __('messages.Click here to Home') }}</a>
        </div>
            
        </div>

    
</div>
@endsection

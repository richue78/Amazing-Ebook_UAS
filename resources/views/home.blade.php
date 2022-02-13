@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
        <table class="table table-bordered">
            <thead>

              <tr>
                <th scope="col">{{ __('messages.Title') }}</th>
                <th scope="col">{{ __('messages.Author') }}</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($ebooks as $ebook)
                    
              <tr>
                <td>{{ $ebook->title }}</td>
                <td><a href="/detail/{{ $ebook->id }}">{{ $ebook->author }}</a></td>
              </tr>
              @endforeach

            
            </tbody>
          </table>
    </div>
</div>
@endsection

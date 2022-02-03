@extends('layout')

@section('title', 'Guiters')

@section('content')

<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        @foreach ($guiters as $guiter)
            <a href="{{route('guiters.show', $guiter->id)}}"><h1>{{$guiter->name}}</h1></a>
            <ul>
                <li>{{$guiter->brand}}</li>
                <li>{{$guiter->year_made}}</li>
            </ul>
        @endforeach
    </div>
</div>

@endsection

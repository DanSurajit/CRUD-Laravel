@extends('layout')

@section('title', 'Guiter')

@section('content')

<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <h1>{{$guiter->name}}</h1>
            <ul>
                <li>{{$guiter->brand}}</li>
                <li>{{$guiter->year_made}}</li>
                <a href="{{route('guiters.edit', $guiter->id)}}">Edit</a>
            </ul>
    </div>
</div>

@endsection

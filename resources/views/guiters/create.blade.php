@extends('layout')

@section('title', 'Create Guiters')

@section('content')

<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1>Guiters</h1>
        </div>

        <form class="justify-center pt-8" action="{{ route('guiters.store') }}" method="POST">
            @csrf
            <div>
                <label class="text-sm" for="guiter-name">Guiter Name</label>
                <input class="text-lg border-1" type="text" id="guiter-name" value="{{old('guiter-name')}}" name="guiter-name">
                @error('guiter-name')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="brand">Brand</label>
                <input class="text-lg border-1" type="text" id="brand" value="{{old('brand')}}" name="brand">
                @error('brand')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label class="text-sm" for="guiter-name">Year made</label>
                <input class="text-lg border-1" type="text" id="year" value="{{old('year')}}" name="year">
                @error('year')
                    <div class="form-error">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <button class="border-1" type="submit">Submit</button>
            </div>
        </form>

        @endsection

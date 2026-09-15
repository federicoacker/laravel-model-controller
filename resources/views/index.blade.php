@extends('layouts.main')

@section('content')
    <section class="main-section">
    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-gap-4">
            @foreach($movies as $movie)
            <div class="col">
                <x-movie-card>
                    <x-slot:title>{{ $movie['title'] }}</x-slot>
                    <x-slot:original_title>{{ $movie['original_title'] }}</x-slot>
                    <x-slot:nationality>{{ $movie['nationality'] }}</x-slot>
                    <x-slot:date>{{ $movie['date'] }}</x-slot>
                    <x-slot:vote>{{ $movie['vote'] }}</x-slot>
                </x-movie-card>
            </div>
            @endforeach
        </div>
    </div>


    </section>
@endsection
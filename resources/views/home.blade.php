@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-columns">

        <!-- For loop daftar seminar -->
        @foreach($seminar as $s)
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $s->title }}</h4>
                <p class="card-text">{{ $s->description }}</p>
                <a class="btn btn-primary" href="/home/daftar/{{ $s->id }}">Daftar</a>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-columns">

        <!-- For loop daftar seminar -->
        @foreach($seminar as $s)
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $s->title }}</h4>
                <p class="card-text">{{ Str::limit($s->description, 100) }}</p>
                <h5 class="card-text" style="font-size: 16px; margin-bottom: 5px">{{ $s->location }}</h5>
                <h6 class="card-text" style="margin-bottom: 15px">{{ $s->date }}</h6>
                <a class="btn btn-primary" href="/home/daftar/{{ $s->id }}">Daftar</a>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection

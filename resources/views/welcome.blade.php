@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-columns">

        <!-- For loop daftar seminar -->
        @for ($i = 0; $i < 15; $i++)
        <div class="card">
            <img src="https://dummyimage.com/600x400/000/fff" alt="" class="card-img">
            <div class="card-body">
                <h4 class="card-title">Judul Seminar {{ $i+1 }}</h4>
                <p class="card-text">Deskripsi pendek</p>
                <a class="btn btn-primary" href="#"">Button 1</a>
                <a class="btn btn-danger" href="#"">Button 2</a>
            </div>
        </div>
        @endfor

    </div>
</div>

@endsection
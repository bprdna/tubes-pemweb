@extends('layouts.app')

@section('content')

@if ($id == 1)
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Seminar Admin Panel</a>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a href="/admin/create" class="btn btn-primary">Add</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container justify-content-center align-content-center">
    <div class="card">
        <div class="card-header">
            Seminar CRUD
        </div>
        <div class="card-body">
            <!-- Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($seminar as $s)
                    <tr>
                        <td scope="row">{{ $s-> title }}</td>
                        <td>{{ $s-> location }}</td>
                        <td>{{ $s-> date }}</td>
                        <td>
                            <a class="btn btn-info" href="/admin/edit/{{ $s->id }}">Edit</a>
                            <a class="btn btn-danger" href="/admin/destroy/{{ $s->id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@else

<div class="container">
    <h1>RESTRICTED AREA</h1>
</div>

@endif

@endsection
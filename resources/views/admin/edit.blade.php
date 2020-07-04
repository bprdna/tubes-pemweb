@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center align-content-center">
        <div class="card col-8">
            <div class="card-header">
                Add Seminar
            </div>
            <div class="card-body">
                <form action="/admin/update/{{ $seminar->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" class="form-control" value="{{ $seminar->title }}">

                        @if($errors->has('title'))
                            <div class="text-danger">
                                {{ $errors->first('title')}}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" id="" rows="3">{{ $seminar->description }}</textarea>

                        @if($errors->has('description'))
                            <div class="text-danger">
                                {{ $errors->first('description')}}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="">Location</label>
                        <input type="text" name="location" id="" class="form-control" value="{{ $seminar->location }}">

                        @if($errors->has('location'))
                            <div class="text-danger">
                                {{ $errors->first('location')}}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" name="date" id="" class="form-control" value="{{ $seminar->date }}">

                        @if($errors->has('date'))
                            <div class="text-danger">
                                {{ $errors->first('date')}}
                            </div>
                        @endif

                    </div>

                    <input type="submit" class="btn btn-success" value="Save">
                    <a class="btn btn-danger" href="/admin">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
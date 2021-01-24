@extends('layouts.layout')

@include('shared.header')

@section('content')
    <div class="container">
        <form action="{{route('image.upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>

    <img src="../../uploads/1611466318book.jpg" width="200px" height="200px">
@endsection
@extends('layouts.layout')

@include('shared.header')

@section('content')
    <div class="container">
        <form action="{{route('image.upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" onChange="imgPreView(event)">
            <div id="preview"></div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>

<script>
    function imgPreView(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        var preview = document.getElementById("preview");
        var previewImage = document.getElementById("previewImage");
        
        if(previewImage != null) {
            preview.removeChild(previewImage);
        }
            reader.onload = function(event) {
            var img = document.createElement("img");
            img.setAttribute("src", reader.result);
            img.setAttribute("id", "previewImage");
            preview.appendChild(img);
        };

        reader.readAsDataURL(file);
    }
</script>
    
@endsection
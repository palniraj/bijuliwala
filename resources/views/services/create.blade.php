@extends('layouts')
@section('content')

<div class="container mt-5">

@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <form action="/ServiceData" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control bg-dark text-white" placeholder="Title" name="name">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">
                        <i class="fas fa-pencil-alt"></i>
                    </span>
                </div>

                <textarea class="form-control bg-dark text-white" placeholder="Descripiton" name="description"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                </div>
                <input type="file" class="form-control bg-dark text-white" value="Cover Image" id="cover_img" name="cover_img">
            </div>
        </div>

        <input type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">

    </form>

</div>




@endsection

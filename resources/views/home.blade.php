@extends('layouts')
@section('content')


<div class="container mt-5">

    <form action="/contactform" method="POST">
        @csrf
        <div class="form-group">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">
                        <i class="fas fa-phone-alt"></i>
                    </span>
                </div>
                <input type="tel" class="form-control bg-dark text-white" placeholder="Mobile number" name="phone">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
                <input type="text" class="form-control bg-dark text-white" placeholder="Name" name="name">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                </div>
                <input type="text" class="form-control bg-dark text-white" placeholder="Address" name="address">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">
                        <i class="fas fa-pencil-alt"></i>
                    </span>
                </div>
                <!-- <input type="text" class="form-control bg-dark text-white" placeholder="Message Your Problem" name="message"> -->

                <textarea class="form-control bg-dark text-white" placeholder="Message Your Problem" name="message"></textarea>
            </div>
        </div>

        <input type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">

    </form>

</div>

@endsection

@extends('layouts')
@section('content')


<div class="container mt-5 row">

@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


    <form action="/PhoneNumber" method="POST">
        @csrf
        <div class="form-group col-sm">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-danger text-white">
                        <i class="fas fa-phone-alt"></i>
                    </span>
                </div>
                <input type="tel" class="form-control bg-dark text-white" placeholder="Phone number" name="phone_number">
            </div>
        </div>


        <div class="col-sm">

        <input type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">

        </div>

    </form>

</div>

<!-- Services -->

<div class="row m-5">

<div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="{{ asset('Fitting.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fitting</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>

    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="{{ asset('Repairing.jpeg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Repairing</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>

    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="{{ asset('Maintaining.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Maintaining</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>



</div>

@endsection

@extends('layouts')
@section('content')

<h4 class="container mt-5 text-center">Sub Services</h4>
<div class="row m-5">
    <div class="col-4">
        @foreach($subservice as $serv)
        <div class="card" style="width: 18rem;">
  <img src="{{asset('storage/'. $serv->cover_img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$serv->price}}</h5>
    <h5 class="card-title">{{$serv->name}}</h5>
    <p class="card-text">{{$serv->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  @endforeach
</div>
</div>


@endsection()

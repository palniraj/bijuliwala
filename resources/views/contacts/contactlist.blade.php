@extends('layouts')
@section('content')

<div class="jumbotron">
    <h1 class="display-3">List of Contact</h1>
    <p class="lead">Here you will get list of contact form.</p>
    <hr class="my-2">
   </div>

   <div class="container">
   <table class="table">
       <thead>
           <tr>
               <th>Phone</th>
               <th>Name</th>
               <th>Address</th>
               <th>Problem Message</th>
           </tr>
       </thead>

       <tbody>
            @foreach($contactLists as $con)

            <tr>
                <td>{{$con->phone}} </td>
                <td>{{$con->name}} </td>
                <td>{{$con->address}} </td>
                <td>{{$con->message}} </td>
            </tr>

            @endforeach
       </tbody>

   </table>
   </div>

@endsection

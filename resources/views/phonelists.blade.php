@extends('layouts')
@section('content')

<div class="jumbotron text-center">
    <h1 class="display-3">List of Phone Numbers</h1>
    <p class="lead">Here you will get list of Phone Numbers.</p>
    <hr class="my-2">
   </div>

   <div class="text-center">
   <table class="table">
       <thead>
           <tr>
                <th>ID</th>
               <th>Phone Numbers</th>
               <th>Created</th>

           </tr>
       </thead>

       <tbody>
            @foreach($phoneLists as $phlist)

            <tr>
                <td>{{$phlist->id}}</td>
                <td>{{$phlist->phone_number}} </td>
                <td>{{$phlist->created_at}} </td>

            </tr>

            @endforeach
       </tbody>

   </table>
   </div>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bijuliwala</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>
<body>


    <nav class="navbar navbar-expand-xl navbar-dark bg-success">
    <a class="container navbar-brand" href="/home">Bijuliwala</a>

    <div class="container collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mr-5 mt-lg-0">
            <li class="nav-item active mr-3">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/page2">Page2</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/service">Service</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contactform">Contact</a>
            </li>

        </ul>


</nav>



@if(!empty(session('message')))
<div class="alert alert-success text-center">
  {{session('message')}}
</div>
@endif

@yield('content')
</body>
</html>

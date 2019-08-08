<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
     <script type="text/javascript" src = "{{ url('js/jquery-3.4.1.min.js') }}" ></script>
     <script type="text/javascript" src = "{{ url('js/bootstrap.js') }}" ></script>
     <title>Laravel</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">PMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            
            
            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Logout</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{ url('/Panel')}}">Panel Login</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/Mentor')}}">Mentor Login</a>
              </li> --}}
          </ul>
        </div>
      </nav>

      <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Passsword</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users->all() as $user)
                    
                <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->type}}</td>
                <td>
                        <a href='{{ url("/read/{$user->id}") }}' class="text text-primary">Read</a>
                        <a href='{{ url("/update/{$user->id}") }}' class="text text-success">Update</a>
                        <a href='{{ url("/delete/{$user->id}") }}' class="text text-danger">Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
          </table>



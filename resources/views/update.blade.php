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

<div class="container">
    <form action="{{url('/updateUser',array($user->id))}}" method="POST">
        {{ csrf_field() }}
        <fieldset>
          <legend>Registration</legend>
         
          <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <input type="text " class="form-control" id="exampleInputEmail1" value={{$user->username}} name="uname" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email"  value = "{{$user->email}}" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="pass" value="{{$user->password}}" id="exampleInputPassword1" placeholder="Password">
          </div>
          
          
          <fieldset class="form-group">
            
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
      </form>
</div>
@include('include.footer')
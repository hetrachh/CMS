@include('include.header')
<div class="container">
    @if (session('info'))
        {{session('info')}}
    @endif
    <form action="{{url('/loginUser')}}" method="POST">
        {{ csrf_field() }}
        <fieldset>
          <legend>Login</legend>
         
          
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control"name = "email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
          </div>
          
          
          <fieldset class="form-group">
            
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
      </form>
</div>

@include('include.footer')
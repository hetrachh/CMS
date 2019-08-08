@include('include.header')
<div class="container">
    <form action="{{url('/registerUser')}}" method="POST">
        {{ csrf_field() }}
        <fieldset>
          <legend>Registration</legend>
         
          <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <input type="text " class="form-control" id="exampleInputEmail1" name="uname" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
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
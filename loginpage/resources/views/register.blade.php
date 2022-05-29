@extends('header')

@section('content')
 <form action="/register" method="POST">
      @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Name"  >
    <span>@error('username'){{$message}}@enderror</span>

   </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your password"  >
   </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Your Confirm Password"  >
    <span>@error('password'){{$message}}@enderror</span>

   </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop
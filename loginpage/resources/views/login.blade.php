
@extends('header')

 
@section('content')
@if(Session::get('wrong'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{Session::get('wrong')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

 <form action="/login" method="POST">
      @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Your Name"  >
   </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your password"  >
   </div>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop

 
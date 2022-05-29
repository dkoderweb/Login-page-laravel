
@extends('header')

 

@section('content')
<h1 class="text-center">Welcome {{Session::get('user')}}</h1>
@stop


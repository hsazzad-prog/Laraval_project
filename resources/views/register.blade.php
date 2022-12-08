@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<h1>Registration</h1>
<form action="/register" method="post">
{{csrf_field()}}
Your name is <input type="text" name="name" >
@if($errors->has('name'))
<b>{{$errors->first('name')}}</b>
@endif
Your age is <input type="number" name="age" value="">
Your email is <input type="email" name="email" value="">
<input type="submit" value="Register">
<form>
@endsection
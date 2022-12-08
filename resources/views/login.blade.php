@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')

<h1>Login</h1>
<form action="/login" method="post">
{{csrf_field()}}
Your name is <input type="text" name="name" >
Your email is <input type="email" name="email" value="">
<input type="submit" value="Login">
<form>
    <h4>
@if(!empty($output))
{{$output}}
@endif
@endsection
</h4>
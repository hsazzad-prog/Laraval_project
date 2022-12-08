@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<h1>Registration</h1>

@foreach($customer as $customers)
{{$customers->FIRST_NAME}}
<br>
@endforeach

@endsection
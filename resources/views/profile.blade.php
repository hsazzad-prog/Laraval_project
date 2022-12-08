@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')

<h1>Profile</h1>

<h3>

{{ session()->get('name') }}

</h3>

<a href="/logout"> Log out </a>

@endsection
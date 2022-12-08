@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<h1>Employee</h1>
@foreach($employee as $emp)
{{$emp->EMP_ID}}
{{$emp->FIRST_NAME}}
@endforeach



<div id="example">

</div>

<script src="{{ asset('js/app.js') }}" defer></script>

@endsection


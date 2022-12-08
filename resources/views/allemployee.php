@extends('layouts.app')

<h1>Employee</h1>
@foreach($employee as $emp)
{{$emp->EMP_ID}}
@endforeach


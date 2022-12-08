@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')

<h1>Add</h1>

<h3>

{{ session()->get('name') }}

</h3>

 <!-- React root DOM -->

 <div id="axiopost">

</div>



<!-- React JS -->

<script src="{{ asset('js/app.js') }}" defer></script>


    
</script>
@endsection
    





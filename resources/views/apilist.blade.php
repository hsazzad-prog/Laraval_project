@extends('layouts.app')
@section('title')
MY Homepage
@endsection
@section('content')
<h1>API list</h1>

<p id="demo"></p>

PRODUCT_CD: <p id="PRODUCT_CD"></p>
DATE_OFFERED: <p id="DATE_OFFERED"></p>
DATE_RETIRED: <p id="DATE_RETIRED"></p>
NAME: <p id="NAME"></p>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
  
  console.log( "reseponse"+this.responseText);
var myobj=JSON.parse(this.responseText);

myobj.forEach(myFunction);

function myFunction(obj) {
  document.getElementById("PRODUCT_CD").innerHTML = obj.PRODUCT_CD;
  document.getElementById("DATE_OFFERED").innerHTML = obj.DATE_OFFERED;
  document.getElementById("DATE_RETIRED").innerHTML = obj.DATE_RETIRED;
  document.getElementById("NAME").innerHTML = obj.NAME;
}

 


  }
  xhttp.open("GET", "http://localhost:8000/api/product/list", true);
  xhttp.send();
}
loadDoc() ;
</script>
@endsection



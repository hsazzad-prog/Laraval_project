@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<h1>Products</h1>
PRODUCT_CD: <p id="pcd"></p>
DATE_OFFERED:<p id="poff"></p>
DATE_RETIRED: <p id="pret"></p>
NAME: <p id="name">       </p> 
PRODUCT_TYPE_CD: <p id="ptype"> </p>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
    var myobj = JSON.parse(this.responseText);
    document.getElementbyID("pcd").innerHTML=myobj[0].PRODUCT_CD;
    console.log(myobj[0].PRODUCT_CD);
    document.getElementbyID("poff").innerHTML=myobj[0].DATE_OFFERED;
    document.getElementbyID("pret").innerHTML=myobj[0].DATE_RETIRED;
    document.getElementbyID("name").innerHTML=myobj[0].NAME;
    document.getElementbyID("ptype").innerHTML=myobj[0].PRODUCT_TYPE_CD;
    }
    else
{
    console.log("no connection");
}

    }
  xhttp.open("GET", "http://localhost:8000/api/product/list", true);
  xhttp.send();
}
</script>


@endsection
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function APIlist()
    {
       return Product::all();
    }
    function APIPost(Request $req)
    {
       $product = new Product();
$product->PRODUCT_CD=$req->pcd;
// $product->DATE_OFFERED=$req->doff;
// $product->DATE_RETIRED=$req->dret;
$product->NAME=$req->pname;
$product->save();

return $req;

    }
}

?>
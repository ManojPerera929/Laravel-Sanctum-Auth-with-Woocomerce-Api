<?php

namespace App\Http\Controllers;
use App\Exceptions\Handler;
use Exception;
use App\Models\WoocomerceProducts;
use Illuminate\Http\Request;

//use Symfony\Component\HttpKernel\Exception\HttpException;

class ProductController extends Controller
{

    //
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function getresults(){
        try {
            $products=WoocomerceProducts::all();
        }
        catch (Exception $e){

            return response()->json(['status'=>$e->getCode(),'error'=>$e->getMessage()]);
        }
        return response()->json(['status'=>200,'products'=>$products]);
    }
}

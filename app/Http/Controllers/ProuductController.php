<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProuductController extends Controller
{

    public Function index(){
            $products = Products::all();
            return view('showProduct',compact('products'));
    }

    public function show($id){
        $products = Products::find($id);
        return view('detailshow',compact('products'));
    }

}

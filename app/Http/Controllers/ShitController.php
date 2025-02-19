<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShitController extends Controller
{
    public function index(){
        $array = [
            [
                'name'=>'Alice',
                'age'=>40,
                'grade'=>'A'
            ],
            [
                'name'=>'Bob',
                'age'=>25,
                'grade'=>'B'
            ],
            [
                'name'=>'Catherine',
                'age'=>32,
                'grade'=>'A'
            ]

        ];
        return view("article.article",compact('array'));
    }
}

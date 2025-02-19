<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $lists = [
            [
                "name" => "John",
                "age" => 25,
                "city" => "New York",
            ],
            [
                "name" => "Jane",
                "age" => 30,
                "city" => "Washinton",
            ],
            [
                "name" => "Bob",
                "age" => 35,
                "city" => "Chicago",
            ],
            [
                "name" => "Alice",
                "age" => 20,
                "city" => "Los Angeles",
            ]
    
            ];

            return view('categories.category', compact('lists'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    // public function index(){
    //     $categories = Category::get();
    //     return response()-> json($categories);
    // }


    public function show(){
        $items = Category::all();
        return response()->json($items);
    }
}

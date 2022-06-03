<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
       /* $categories= Category::all();
        $subcategories= SubCategory::all();
        $subsubcategories= SubSubCategory::all();
        $products = Product::all();
        $sliders = Slider::all();*/
        return view('frontend.index'/*, compact('categories','subcategories','subsubcategories', 'products' , 'sliders')*/);
    }
}

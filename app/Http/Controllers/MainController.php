<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MainController extends Controller
{
    public function index() {

        $persons = App\Person::All();
        $products = App\Product::All();
        //$users = $users[0]->name;
        return view('content')->with('persons', $persons)->with('products', $products);
       // return view('product')->with('products', $products);
    }
}

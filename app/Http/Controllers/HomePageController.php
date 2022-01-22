<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Request $request){
        return view("home_page");
    }

    public function about(Request $request){
        return view("about");
    }
        

}

/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller{
    //Este método está chamando a view que foi criada
    public function index(Request $request){
        return view("home_page");
    }

    //chamando a view about
    public function about(Request $request){
        return view("about");
    }
        
}
*/
<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    var $data;
    public function __construct(Request $request)
    {
        $routeArray = $request->route()->getAction(); 
        $controllerAction = class_basename($routeArray["controller"]);
        list($controller, $action) = explode("@", $controllerAction);
        $this->data["request"]= $request; 
        $this->data["controller"]= $controller;   
        $this->data["action"]= $action;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){        
        return view('index', $this->data);
    }

    public function about_us(){        
        return view('about_us', $this->data);
    }

    public function product(){        
        return view('product', $this->data);
    }

    public function pricing(){        
        return view('pricing', $this->data);
    }

    public function contact(){        
        return view('contact', $this->data);
    }

    public function create_contact(){
        $req = $this->data["request"];
        
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploController extends Controller
{
    public function index(){
        $title="Welcome to exemplo";
      return view('exemplo.exemplo')->with('title',$title);
    }
    public function about(){
        $title="welcome to about";
      return view('exemplo/about')->with('title',$title);
    }
    public function contact(){
      $data=array(
        "title"=>"welcome to contact check yours services",
        "services"=>['Java',"php","C++","Python"]
      );
      return view("exemplo/contact")->with($data);
    }
}

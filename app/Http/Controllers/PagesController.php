<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
    $title = "Title";
    return view('pages.index', compact('title'));
   }

   public function services(){
    $data = array(
        'title' => 'Services',
        'services' => ['WebDesign', 'Programming', 'SEO']
    );
    $title = "Title";
    return view('pages.services')->with($data);
   }

   public function about(){
       $title = "title";
       return view('pages.about')->with('title',$title);
   }

}

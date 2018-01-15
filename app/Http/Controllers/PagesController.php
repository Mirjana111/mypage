<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = 'Welcome to Student Cooking Blog!';

      return view('pages.index')->with('title', $title);
    }
    public function about(){
      $title = 'About our Blog';
      return view('pages.about')->with('title', $title);
    }
    public function services(){
      $data = array(
        'title'=> 'How to...',
        'services'=> ['Buy groceries for cooking','Plan meals','Clean','Eat for Health']


      );
      return view('pages.services')->with($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
      $title = 'Welcome dear programmers to laravel course!';
      return view('pages.index', compact('title'));
    }
    public function about()
    {
      return view('pages.about');
    }
    public function services()
    {
      $data= array(
        'title' => 'Services',
        'services' => ['Web development', 'Web design', 'Programming', 'SEO']
      );
      return view('pages.services')->with('services', $data['services'])->with('title', $data['title']);
    }
}

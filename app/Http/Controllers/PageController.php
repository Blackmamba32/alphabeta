<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index(){
    $title='Index page';
//return view('pages.index',compact('title'));
return view('pages.index')->with('title',$title);
}
public function about(){
    return view('pages.about');
    }

public function contact(){
        $data=array(
            'title'=>'Project',
            'numbers'=>['9860609417','982222222','98329434']
         
        );
        return view('pages.contact')->with($data);
        }

}

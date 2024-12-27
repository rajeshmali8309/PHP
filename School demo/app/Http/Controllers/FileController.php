<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function home(){
        return view('project-1.index');
    }

    public function gallery(){
        return view('project-1.gallery');
    }

    public function blog(){
        return view('project-1.blog');
    }

    public function teachers(){
        return view('project-1.teachers');
    }

    public function about(){
        return view('project-1.about');
    }   

    public function contact(){
        return view('project-1.contact');
    } 

    public function registerlogin(){
        return view('project-1.registerlogin');
    }
}

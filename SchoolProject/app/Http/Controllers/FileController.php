<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Teacher;
use App\Models\About;
use App\Models\Blog;

class FileController extends Controller
{
    public function home(){
        return view('project-1.index');
    }

    public function gallery(){
        $galleries = Gallery::all();
        return view('project-1.gallery', compact('galleries'));
    }

    public function blog(){
        $blogsData = Blog::all();
        return view('project-1.blog', compact('blogsData'));
    }

    public function teachers(){
        $teachersData = Teacher::all();
        return view('project-1.teachers', compact('teachersData'));
    }

    public function about(){
        $aboutsData = About::all();
        return view('project-1.about', compact('aboutsData'));
    }   

    public function contact(){
        return view('project-1.contact');
    } 

    public function registerlogin(){
        return view('project-1.registerlogin');
    }

    public function loginform(){
        return view('project-1.register-login');
    }

    

    public function adminpanel(){
        return view('admin-panel.admin');
    }

    public function mailviewfile(){
        return view('mailview.mail');
    }

    

    
}

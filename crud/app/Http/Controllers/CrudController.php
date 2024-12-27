<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function showform(){
        return view('registraion');
    }


    public function store(request $request)
    {
       
       $data = $request->all();
       $data['hobbies'] = implode(',', $request->hobbies);


       if ($request->hasFile('profile')) {
            $imageName = time().'.'.$request->profile->getClientOriginalExtension();
            $image = public_path('images');
            $request->profile->move($image, $imageName);
            $data['profile'] = $imageName;

        }

        Crud::create($data);

        if($data){
            echo "insert success";
        }
        else{
            echo "insert faild";
        }


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class TestController extends Controller
{
    
    public function index()
    {
        // return view('test');

        $data = Student::where('name','durgesh')->orderBy('id', 'DESC')->first();

        echo  "<pre>";
        print_r($data->toArray());
        exit;
    }

    public function demo()
    {
        return view('naeem.demo');
    }


    public function training()
    {

        return view('training');
    }

    public function storeData(Request $request)
    {

        $stuObj = new Student();

        $stuObj->name = $request['name'];
        $stuObj->email = $request['email'];
        $stuObj->password = $request['password'];
        $stuObj->phone = $request['phone'];
        $stuObj->rollno = $request['rollno'];
        $stuObj->gender = $request['gender'];
        $stuObj->hobbies = implode(',',$request['hobbies']);
        $stuObj->save();

        echo "insert success";

      

    }



}
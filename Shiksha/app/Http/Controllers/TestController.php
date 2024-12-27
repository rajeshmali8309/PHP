<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class TestController extends Controller
{
    public function formData(Request $request)
    {
        // echo"hello";
        // exit;
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'phone' => 'required',
            'gender' => 'required',
            'hobbies' => 'required',
            'dob' => 'required',
            'time' => 'required',
            'qualification' => 'required',
            'profile' => 'required'
        ]);

        $alldata = $request->all();
        $alldata['hobbies'] = implode(',' , $request->all()['hobbies']);

        if($request->hasFile('profile'))
        {       
           $imageName = time().'.'.$request->profile->getClientOriginalExtension();
           $image = public_path('img');
           $request->profile->move($image, $imageName);
           $alldata['profile'] = $imageName;
           
        //    echo "<pre>";
        //    print_r($alldata);
        //    exit;

        }


        // echo "<pre>";
        // print_r($alldata);
        // exit;

        Student::create($alldata);

        if($alldata)
        {
            return redirect()->route('display');
        }else{
            echo "data insert Faild";
        }
        
    }

    public function show(){
       $requestAll = Student::all();
       return view('showdata', compact('requestAll'));
    }

    public function destroy($id)
     {
        $student = Student::where('id', $id)->first();

        // echo "<pre>";
        // print_r($student);
        // exit;
        
        if ($student) {
            $student->delete();
            return redirect()->route('display');
        }
    }

    public function edit($id)
      {
   
    $studentID = Student::find($id);

    if ($studentID) {
        return view('editdata', compact('studentID'));
    }
   }

   public function update(Request $request){

        $alldata = $request->all();
        $alldata['hobbies'] = implode(',' , $request->all()['hobbies']);

        if($request->hasFile('profile'))
        {       
           $imageName = time().'.'.$request->profile->getClientOriginalExtension();
           $image = public_path('img');
           $request->profile->move($image, $imageName);
           $alldata['profile'] = $imageName;
           
        //    echo "<pre>";
        //    print_r($alldata);
        //    exit;

        }
        else {
            $alldata['profile'] = $request['hidden_profile'];
            //  echo "<pre>";
            //  print_r($alldata);
            //  exit;
        }

        Student::updateOrCreate([
            'id' => $alldata['id'],
        ], 
        $alldata
    );

    return redirect()->route('display');
       
   }



}

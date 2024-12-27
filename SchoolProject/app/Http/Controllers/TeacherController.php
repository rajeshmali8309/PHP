<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function teacher(){
        $requestAll = Teacher::all();
        return view('admin-panel.Teacher.teacher', compact('requestAll'));
    }

    public function store(request $request)
    {


        $data = $request->all();

        if($request->hasFile('profile'))
        {       
           $imageName = time().'.'.$request->profile->getClientOriginalExtension();
           $image = public_path('images');
           $request->profile->move($image, $imageName);
           $data['profile'] = $imageName;  
        //    echo "<pre>";
        //    print_r($data);
        //    exit;

        Teacher::create($data);

        if($data)
        {
            return redirect()->route('admin-teacher');
        }else{
            echo "data insert Faild";
        }


        }
    }






    public function destroy($id)
    {
       $teacherID = Teacher::where('id', $id)->first();

       // echo "<pre>";
       // print_r($teacherID);
       // exit;
       
       if ($teacherID) {
           $teacherID->delete();
           return redirect()->route('admin-teacher');
       }
   }




   public function edit($id)
    {
   
       $profileID = Teacher::find($id);

       if ($profileID) {
           return view('admin-panel.Teacher.editteacher', compact('profileID'));
        }
    }



    public function update(Request $request){

        $data = $request->all();

        if($request->hasFile('profile'))
        {       
           $imageName = time().'.'.$request->profile->getClientOriginalExtension();
           $image = public_path('images');
           $request->profile->move($image, $imageName);
           $data['profile'] = $imageName;
           
        //    echo "<pre>";
        //    print_r($alldata);
        //    exit;

        }
        else {
            $data['profile'] = $request['hidden_profile'];
            //  echo "<pre>";
            //  print_r($alldata);
            //  exit;
        }

        Teacher::updateOrCreate([
            'id' => $data['id'],
        ], 
        $data
    );

    return redirect()->route('admin-teacher');
       
   }


   //....................................Create API controller..........

public function insert(request $request)
{


    $data = $request->all();

    if($request->hasFile('profile'))
    {       
       $imageName = time().'.'.$request->profile->getClientOriginalExtension();
       $image = public_path('images');
       $request->profile->move($image, $imageName);
       $data['profile'] = $imageName;  
    //    echo "<pre>";
    //    print_r($data);
    //    exit;

     $gallary =  Teacher::create($data);

    if($data)
    {
        // return redirect()->route('admin-gallery');
           return response()->json(['message'=>'insert data successfully',$gallary]);
    }else{
        echo "data insert Faild";
    }


    }
}

public function delete($id){
    $profile = Teacher::where('id', $id)->first();

    // echo "<pre>";
    // print_r($profile);
    // exit;
    
    if ($profile) {
        $Data = $profile->delete();
        return response()->json(['message'=>'teacher Delete successfully',$Data]);
    }else{
        return response()->json(['message' => 'Item not found.'], 404);
    }        
}

public function updateteacher(Request $request){

    $data = $request->all();

    if($request->hasFile('profile'))
    {       
       $imageName = time().'.'.$request->profile->getClientOriginalExtension();
       $image = public_path('images');
       $request->profile->move($image, $imageName);
       $data['profile'] = $imageName;
       
    //    echo "<pre>";
    //    print_r($alldata);
    //    exit;

    }
    else {
        $data['profile'] = $request['hidden_profile'];
    }

    $gallary =  Teacher::updateOrCreate([
        'id' => $data['id'],
    ], 
    $data
);


if($data)
{
    // return redirect()->route('admin-gallery');
       return response()->json(['message'=>'teacher Update successfully',$gallary]);
}else{
    echo "data update Faild";
}
   
}


public function showteacher()
{

$GalleryAll = Teacher::all();

if($GalleryAll)
{
       return response()->json(['message'=>'All Teachers Data Show',$GalleryAll]);
}else{
    echo "data Not Found";
}
}

}

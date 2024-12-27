<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function galleryshow(){
        $requestAll = Gallery::all();
        return view('admin-panel.Gallery.gallery', compact('requestAll'));
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

        Gallery::create($data);

        if($data)
        {
            return redirect()->route('admin-gallery');
        }else{
            echo "data insert Faild";
        }


        }
    }






    public function destroy($id)
    {
       $profile = Gallery::where('id', $id)->first();

       // echo "<pre>";
       // print_r($profile);
       // exit;
       
       if ($profile) {
           $profile->delete();
           return redirect()->route('admin-gallery');
       }
   }




   public function edit($id)
    {
   
       $profileID = Gallery::find($id);

       if ($profileID) {
           return view('admin-panel.Gallery.editgallery', compact('profileID'));
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

        Gallery::updateOrCreate([
            'id' => $data['id'],
        ], 
        $data
    );

    return redirect()->route('admin-gallery');
       
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

         $gallary =  Gallery::create($data);

        if($data)
        {
            // return redirect()->route('admin-gallery');
               return response()->json(['message'=>'insert data succefully',$gallary]);
        }else{
            echo "data insert Faild";
        }


        }
    }

    public function delete($id){
        $profile = Gallery::where('id', $id)->first();

        // echo "<pre>";
        // print_r($profile);
        // exit;
        
        if ($profile) {
            $Data = $profile->delete();
            return response()->json(['message'=>'Gallery Delete succefully',$Data]);
        }else{
            return response()->json(['message' => 'Item not found.'], 404);
        }        
    }

    public function updategallery(Request $request){

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

        $gallary =  Gallery::updateOrCreate([
            'id' => $data['id'],
        ], 
        $data
    );

    
    if($data)
    {
        // return redirect()->route('admin-gallery');
           return response()->json(['message'=>'Gallery Update successfully',$gallary]);
    }else{
        echo "data update Faild";
    }
       
   }


   public function showgallery()
   {
    
    $GalleryAll = Gallery::all();

    if($GalleryAll)
    {
           return response()->json(['message'=>'All Gallery Data Show',$GalleryAll]);
    }else{
        echo "data Not Found";
    }
}
    
}

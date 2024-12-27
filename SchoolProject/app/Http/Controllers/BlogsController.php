<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function blogs(){
        $requestAll = Blog::all();
        return view('admin-panel.Blogs.blogs', compact('requestAll'));
    }

    public function addblog(){
        return view('admin-panel.Blogs.create');
    }

    public function store(request $request)
    {

        $validated = $request->validate([
            'title' => 'required|max:50',
            'information' => 'required',
            'profile' => 'required',

        ]);


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

        Blog::create($data);

        if($data)
        {
            return redirect()->route('admin-blogs');
        }else{
            echo "data insert Faild";
        }


        }
    }






    public function destroy($id)
    {
       $blogID = Blog::where('id', $id)->first();

       if ($blogID) {
           $blogID->delete();
           return redirect()->route('admin-blogs');
       }
   }




   public function edit($id)
    {
   
       $profileID = Blog::find($id);

       if ($profileID) {
           return view('admin-panel.Blogs.editblog', compact('profileID'));
        }
    }



    public function update(Request $request){

        $validated = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'profile' => 'required',

        ]);

        $data = $request->all();

        if($request->hasFile('profile'))
        {       
           $imageName = time().'.'.$request->profile->getClientOriginalExtension();
           $image = public_path('images');
           $request->profile->move($image, $imageName);
           $data['profile'] = $imageName;

        }
        else {
            $data['profile'] = $request['hidden_profile'];
        }

        Blog::updateOrCreate([
            'id' => $data['id'],
        ], 
        $data
    );

    return redirect()->route('admin-blogs');
       
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
      
           $gallary =  Blog::create($data);
      
          if($data)
          {
              // return redirect()->route('admin-gallery');
                 return response()->json(['message'=>'Blog data insertn successfully',$gallary]);
          }else{
              echo "data insert Faild";
          }
      
      
          }
      }
      


public function delete($id){

    $profile = Blog::where('id', $id)->first();

    // echo "<pre>";
    // print_r($profile);
    // exit;
    
    if ($profile) {
        $Data = $profile->delete();
        return response()->json(['message'=>'Blog Delete successfully',$Data]);
    }else{
        return response()->json(['message' => 'Item not found.'], 404);
    }        
    }



    public function updateblog(Request $request){

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
    
        $gallary =  Blog::updateOrCreate([
            'id' => $data['id'],
        ], 
        $data
    );
    
    
    if($data)
    {
        // return redirect()->route('admin-gallery');
           return response()->json(['message'=>'Blog Update successfully',$gallary]);
    }else{
        echo "data update Faild";
    }
       
    }
    

    public function showblog()
    {

    $GalleryAll = Blog::all();

    if($GalleryAll)
    {
        return response()->json(['message'=>'All Bolgs Data Show',$GalleryAll]);
    }else{
        echo "data Not Found";
    }
    }

}

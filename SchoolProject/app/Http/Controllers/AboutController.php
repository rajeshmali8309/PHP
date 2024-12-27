<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function about(){
        $requestAll = About::all();
        return view('admin-panel.About.about', compact('requestAll'));
    }

    public function addabout(){
        return view('admin-panel.About.create');
    }

    public function store(request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'information' => 'required',

        ]);

        // public function messages(): array
        //   {
        //     return [
        //         'title.required' => 'A title is required',
        //         'body.required' => 'A message is required',
        //     ];
        //   }

        $data = $request->all();


        About::create($data);

        if($data)
        {
            return redirect()->route('admin-about');
        }else{
            echo "data insert Faild";
        }


    }



    public function destroy($id)
    {


       $aboutID = About::where('id', $id)->first();

       // echo "<pre>";
       // print_r($aboutID);
       // exit;
       
       if ($aboutID) {
           $aboutID->delete();
           return redirect()->route('admin-about');
       }
   }




   public function edit($id)
    {
   
       $aboutID = About::find($id);

       if ($aboutID) {
           return view('admin-panel.About.editabout', compact('aboutID'));
        }
    }



    public function update(Request $request){

        $validated = $request->validate([
            'title' => 'required|max:50',
            'information' => 'required',

        ]);

        $data = $request->all();

        About::updateOrCreate([
            'id' => $data['id'],
        ], 
        $data
    );

    return redirect()->route('admin-about');
       
   }


    //....................................Create API controller..........

public function insert(request $request)
{


    $data = $request->all();

     $gallary =  About::create($data);

    if($data)
    {
           return response()->json(['message'=>'About data insert successfully',$gallary]);
    }else{
        echo "data insert Faild";
    }


}



public function delete($id){

    $profile = About::where('id', $id)->first();

    // echo "<pre>";
    // print_r($profile);
    // exit;
    
    if ($profile) {
        $Data = $profile->delete();
        return response()->json(['message'=>'About Delete successfully',$Data]);
    }else{
        return response()->json(['message' => 'Item not found.'], 404);
    }        
    }



public function updateabout(Request $request){

        $data = $request->all();

        $gallary =  About::updateOrCreate([
            'id' => $data['id'],
        ], 
        $data
    );
    
    if($data)
    {
        return response()->json(['message'=>'About Update successfully',$gallary]);
    }else{
        echo "data update Faild";
    }
   
}


    public function showabout()
    {

    $GalleryAll = About::all();

    if($GalleryAll)
    {
        return response()->json(['message'=>'All Teachers Data Show',$GalleryAll]);
    }else{
        echo "data Not Found";
    }
    }

}

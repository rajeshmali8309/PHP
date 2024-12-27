<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        $requestAll = Contact::all();
        return view('admin-panel.Contact.contact', compact('requestAll'));
    }


    public function store(request $request)
    {
        $data = $request->all();


        Contact::create($data);

        if($data)
        {
            return redirect()->route('contact');
        }else{
            echo "data insert Faild";
        }
    }



    public function destroy($id)
    {
       $contactID = Contact::where('id', $id)->first();  

       if ($contactID) {
           $contactID->delete();
           return redirect()->route('admin-contact');
       }
   }



    //....................................Create API controller..........

    public function insert(request $request)
    {
    
    
        $data = $request->all();
    
         $gallary =  Contact::create($data);
    
        if($data)
        {
            // return redirect()->route('admin-gallery');
               return response()->json(['message'=>'User data insertn successfully',$gallary]);
        }else{
            echo "data insert Faild";
        }
    
    
    }
    


  public function deleteuser($id)
   {

    $profile = Contact::where('id', $id)->first();

  // echo "<pre>";
  // print_r($profile);
  // exit;
  
    if ($profile) {
        $Data = $profile->delete();
        return response()->json(['message'=>'User Delete successfully',$Data]);
    }else{
        return response()->json(['message' => 'Item not found.'], 404);
    }  

    }
  

  public function showcontecttt()
  {

  $GalleryAll = Contact::all();

  if($GalleryAll)
  {
      return response()->json(['message'=>'All User Data Show',$GalleryAll]);
  }else{
      echo "data Not Found";
  }
  }


}

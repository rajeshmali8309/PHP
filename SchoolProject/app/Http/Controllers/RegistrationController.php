<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    public function store(request $request)
    {

        $validated = $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'subject' => 'required',
            'profile' => 'required',

        ]);
       
       $data = $request->all();
       $data['subject'] = implode(',', $request->subject);


       if ($request->hasFile('profile')) {
            $imageName = time().'.'.$request->profile->getClientOriginalExtension();
            $image = public_path('images');
            $request->profile->move($image, $imageName);
            $data['profile'] = $imageName;

        }

    Registration::create($data);

    if($data){
        // echo "insert successful";
        // return redirect()->route('admin-users');
        Session::put('mail_email', $data['email']);
        return redirect()->route('send-mail');
    }else{
        echo "insert faild";
    }

    }

    public function display()
    {
        $Allusers = Registration::all();
        return view('admin-panel.Users.users', compact('Allusers'));
    }

    public function delete($id){
         Registration::find($id)->delete();
         return redirect()->route('admin-users');
    }



    public function checklogin(request $request)
    {
       
        $email =   $request->email;
        $password = $request->password;
        // echo "<pre>";
        // print_r($email);
        // print_r($password);
        // exit; 

        if(Registration::where('email', $email)->first() && Registration::where('password', $password)->first())
        {
            Session::put('user_email', $email);
            return redirect()->route('admin-users');

        }else{
            return redirect()->route('login-form'); 
        }        
                   
    }

    public function logout()
    {
         Session::forget('user_email');
         Session::forget('mail_email');
         if(Session::get('user_email') == ''){

            return redirect()->route('login-form');
            
         }
         
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
        
             $gallary =  Registration::create($data);
        
            if($data)
            {
                // return redirect()->route('admin-gallery');
                   return response()->json(['message'=>'User data insertn successfully',$gallary]);
            }else{
                echo "data insert Faild";
            }
        
        
            }
        }
        
  
  
  public function deleteuser($id){
  
      $profile = Registration::where('id', $id)->first();
  
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
  
  
  
      public function updateuserregister(Request $request){
  
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
      
          $gallary =  Registration::updateOrCreate([
              'id' => $data['id'],
          ], 
          $data
      );
      
      
      if($data)
      {
          // return redirect()->route('admin-gallery');
             return response()->json(['message'=>'User Update successfully',$gallary]);
      }else{
          echo "data update Faild";
      }
         
      }
      
  
      public function showuserregister()
      {
  
      $GalleryAll = Registration::all();
  
      if($GalleryAll)
      {
          return response()->json(['message'=>'All User Data Show',$GalleryAll]);
      }else{
          echo "data Not Found";
      }
      }
  
}

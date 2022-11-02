<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller

{

    public function getContact() {

        return view('contact');
    }
      
    public function saveContact(Request $request) {

        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
        ]);
    
        // dd($contact);
        $email = "lizahmalikx@gmail.com";
        // $data['email'];
 
        $body = [
            'name'=>$data['name'],
            'phone'=>$data['phone'],
            'email'=>$data['email'],
            'message'=>$data['message'],
        ];
 
        // Mail::to($email)->send(new \App\Mail\ContactUs($body));
        Mail::to($email)->send(new ContactUs($body));;
        return redirect()->back()->with('status','Your message has been sent successfully!');
    //     if(Mail::to($email)->send(new ContactUs($body))){
    //         // dd("Mail Send Successfully");            
    //         // echo '<script>swal("Sent!", "We will get back to you soon.","success");  </script>';
    //         return back()->with('status','Mail sent successfully');;
    //     }
    //     else{
    //         // dd("Mail Not Sent");            
    //         return back()->with('status','Mail not sent!');;
    //     }
        
    // }
    }
}


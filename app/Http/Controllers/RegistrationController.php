<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator ;

class RegistrationController extends Controller
{
    
  public function get_registration(){
    return view('login'); 
  }
  
  public function store(Request $request){
//    $this->validate($request,[
//        'email'=>'required|email',
//        'password'=>'required|min:6',
//    ]) ;
     $validator= Validator::make($request->all(),[
          'email'=>'required|email',
          'password'=>'required|min:6'
      ]);
      if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
        
      }
    
    
   
     
    
  }
}

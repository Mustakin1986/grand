<?php

namespace App\Http\Controllers;

use App\Models\LoginRegister;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
  public function Login(Request $request)
  {
     $admin = LoginRegister::where('email',$request->email)->first();
     if(!$admin){
      return redirect()->back()->with('error','Email or Password Wrong');
     }else{
        return redirect('index');
     }

  }
}

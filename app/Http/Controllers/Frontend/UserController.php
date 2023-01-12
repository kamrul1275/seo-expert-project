<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

   public function Index( $var = null)
   {
     return view('Frontend.layout.dashboard');

   } // end methood


   public function Signup( $var = null)
   {
     return view('Frontend.body.signup');

   } // end methood




  



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function storeSessionData(Request $request)
    {
       $request->session()->put('name','ITBRU');
       echo "Data has been added to the session";
    }


    ////get
    public function getSessionData(Request $request)
    {
        if($request->session()->has('name'))
        {
           echo $request->session()->get('name');
        }
        else
        {
            echo "NO data in the session";
        }

    }
    //// belete srssion

    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "Data has been removed  from the session";
    }
}

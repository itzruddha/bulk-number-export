<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Getnumber;
use App\Models\Number;

class WebViewController extends Controller
{
    //
    
    public function index() {
        
        return view('web.index');
    }

    public function get_bulk_number()
    {
        # code...
        $allnumber = Getnumber::where('id', 1)->first();
        //dd($allnumber);
        foreach (explode(',', $allnumber->number) as $info){
            $number = new Number();
            $number->number = $info;
            $number->save();

        }

        echo "success";
        exit();
       
        

    }
}

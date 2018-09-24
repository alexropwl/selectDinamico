<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use App\stage;
use App\Country;
use Illuminate\Support\Facades\DB;


class CityController extends Controller
{





    public function new(){

        return view('city/new');

    }

    public function index(){

        $countries = DB::table('country')->pluck("name","id");

        return view('city/cidade',compact('countries'));




    }
public function states($id){

   $states = DB::table('stages')->where("country_id",$id)->pluck("name","id");

return json_encode($states);












    }

}


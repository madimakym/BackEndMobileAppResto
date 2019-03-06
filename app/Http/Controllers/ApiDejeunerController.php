<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\DejeunerResource;

use Illuminate\Support\Facades\DB;

use App\Dejeuner;

class ApiDejeunerController extends Controller
{
    
    public function index()
        {
            $resultats = DB::table('dejeuner')->select('*')->get();

            return response()->json($resultats);

            
            // return DejeunerResource::collection($resultats);


            // $posts = Dejeuner::all()->pluck('image')->map(function($image){
            //     return "http://localhost:8000/images/".$image;
            // });
            //    return response()->json(['images' =>  $posts]);

        }

}

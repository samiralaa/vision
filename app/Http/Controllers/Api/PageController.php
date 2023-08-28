<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Label;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class PageController extends Controller
{
    public function index($key,$name){


        $response = Label::with(['contents'=>function($query) use ($key) {
            $query->where('lang','=',$key);
        }])->with(['page'=>function($query) use($name){
            $query->where('name',$name);
        }])->get();
  return response()->json($response);

    }
    
}


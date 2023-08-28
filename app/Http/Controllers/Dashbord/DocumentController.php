<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
   public function index()
   {
    $documents = Document::get();
    return view('index');
    return response()->json($documents);
   }
   

}

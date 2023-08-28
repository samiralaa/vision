<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Interested;
use Illuminate\Http\Request;

class InterestedController extends Controller
{
   public function index()
   {
      $date = Interested::get();
      return response()->json($date);
   }

   public function store(Request $request)

   {
      Interested::create($request->all());
      return response()->json('fffff');
   }

   public function delete($id)
   {
      $response = Interested::findOrFail($id);
      if ($response) {
         $response->delete();
      }
   }
}

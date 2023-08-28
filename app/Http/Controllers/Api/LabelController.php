<?php

namespace App\Http\Controllers\Api;

use App\Models\Page;
use App\Models\Label;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LableResource;

class LabelController extends Controller
{
   public function index()
   {
    $page = Label::with('contents')->get();

        return response()->json(LableResource::collection($page));

   }
}

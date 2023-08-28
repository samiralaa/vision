<?php

namespace App\Http\Controllers\Api;

use App\Models\Label;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContentResource;

class ContentController extends Controller
{

    public function getlang()
    {
        $pages = Content::get();
        return response()->json(ContentResource::collection($pages));


    }
    public function store(Request $request)
    {
        //return response()->json('dddd');
        Content::create([
            'page_id'=>1,
            'lable_id'=>1,
            'content'=>$request->content,
            'lang'=>$request->lang,
        ]);
    }
    public function update(Request $request ,$id)
    {
        $content = Content::findOrFail($id)->update($request->all());
        return response()->json('suxsess');
    }
}

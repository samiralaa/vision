<?php

namespace App\Http\Controllers\Api;

use App\Models\Page;
use App\Models\Label;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DocuemntResource;
use App\Models\content;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::get();

        return response()->json($documents);
    }

    public function store(Request $request)
    {

        Document::create([
            'name'=>$request->name,
            'comnumber'=>$request->comnumber,
            'taxnumber'=>$request->taxnumber,
            'typecompany'=>$request->typecompany,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'city'=>$request->city,
            'streat'=>$request->streat,
            'numbild'=>$request->numbild,
            'totalcam'=>$request->totalcam,
            'size'=>$request->size,
            'totalscr'=>$request->totalscr,
            'part'=>$request->part,
            'code'=>$request->code,
        ]);
        return response()->json('succses');
    }
    public function  show($id)
    {
        $document = Document::find($id)->get();
        return response()->json($document);
    }

    public function update(Request $request,$id)
    {


        $valid = Validator::make($request->all(),[
            'email'=>'required'
        ]);
        if($valid->fails()){
            return response()->json($valid->messages());
        }
        $document = Document::findOrFail($id)
                    ->update($request->all());

        // $document->email = $request->email;
        // $document->phone = $request->phone;
        // $document->name = $request->name;
        // $document->save();
    }
    public function getPageDate()
    {
        $lables= Label::with('contents')->get();
        return response()->json($lables);
        // return response()->json(DocuemntResource::collection($lables));

    }
    public function getdocument($id)
    {

        $document = Document::where('code',$id)->get();
        return response()->json($document);
    }
}

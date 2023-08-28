<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::get();
        return response()->json($data);
    }
    public function store(Request $request)
    {
        Contact::create($request->all());
        // send mail from here
        return response()->json('sucsses');
    }
    public function delete($id)
    {
        $response = Contact::findOrFail($id);
        if ($response) {
            $response->delete();
        }
    }
}



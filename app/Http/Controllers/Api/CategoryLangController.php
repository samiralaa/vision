<?php

namespace App\Http\Controllers\Api;

use App\Models\CategoryLang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;

class CategoryLangController extends Controller
{
    public function index()
    {
        $langugaes = CategoryLang::get();

        return response()->json(CategoryResource::collection($langugaes));
    }
    public function store(Request $request)
    {

        CategoryLang::create($request->all());
        return response()->json('dd');
    }
    public function delete($id)
    {
        $category = CategoryLang::findOrFail($id);
        if ($category)
            $category->delete();
        else
            return response()->json('error');
    }
    public function update(Request $request, $id)
    {
        $category = CategoryLang::findOrFail($id)
            ->update($request->all());
        return response()->json('sucsses');
    }
}

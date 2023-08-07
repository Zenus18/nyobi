<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getData(){
        $data = Category::with([
            'items'
        ])->get();
        return response()->json($data);
    }
    public function findById($id){
        
    }
}
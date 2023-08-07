<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $data = news::all();
        return response()->json($data);
    }
    public function findById($id){
        $data = news::find($id);
        return response()->json($data);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    public function index()
    {
        //
        return response()->json([
            'status' => 200,
            'message' => 'Project Added Successfully'
        ]);
    }

    public function read()
    {
        //
        return view('posts.showAjax');
    }
}
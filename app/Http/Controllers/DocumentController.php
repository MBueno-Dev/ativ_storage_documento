<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function store(Request $request)
    {

        $docname = $request->file->name;

        $request->file->storeAs('/public/documents/', $docname);
        
    }
}

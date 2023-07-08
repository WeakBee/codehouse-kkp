<?php

namespace App\Http\Controllers;

use App\Models\Section3;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    //
    public function show($slug)
    {
        $content = Section3::where('id', $slug)->firstOrFail();

        return view('casestudyslug', compact('content'));
    }
}

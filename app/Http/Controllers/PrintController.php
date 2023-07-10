<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    //printPage
    public function printPage(Request $request)
    {
        $form = Form::all();

        return view('print', [
            'form' => $form
        ]);
    }
}

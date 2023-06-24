<?php

namespace App\Http\Controllers;

use App\Models\Section1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreSection1Request;
use App\Http\Requests\UpdateSection1Request;

class Section1Controller extends Controller
{
    public function editSection1(Section1 $data, Request $request){
        if (Auth::check()) {
            $incomingFields = $request->validate([
                'text1' => 'required',
                'text2' => 'required',
                'text3' => 'required',
                'buttontext' => 'required',
            ]);
            $data->update($incomingFields);
        }
        return redirect('/admin');
    }
    public function showEditSection1(Section1 $data){
        return view('sections.section1', ['data' => $data]);
    }
    public function createSection1(Request $request){
        $incomingFields = $request->validate([
            'text1' => 'required',
            'text2' => 'required',
            'text3' => 'required',
            'buttontext' => 'required',
        ]);
        
        Section1::create($incomingFields);
        return redirect('/admin');
    }

    public function checkSection1(Request $request){
        $Section1 = Section1::get();
        if (Auth::check()) {
            if (!$Section1->isEmpty()) { 
                return redirect('/admin/section1/1');
            }else{
                return view('sections.section1creating');
            }
        }
        return redirect('/admin');
    }
}

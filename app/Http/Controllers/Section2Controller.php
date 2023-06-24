<?php

namespace App\Http\Controllers;

use App\Models\Section2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Section2Controller extends Controller
{
    public function editSection2(Section2 $data, Request $request){
        if (Auth::check()) {
            $incomingFields = $request->validate([
                'title' => 'required',
                'subtitle' => 'required',
                'card1title' => 'required',
                'card1text' => 'required',
                'card2title' => 'required',
                'card2text' => 'required',
                'card3title' => 'required',
                'card3text' => 'required',
                'card4title' => 'required',
                'card4text' => 'required',
                'card5title' => 'required',
                'card5text' => 'required',
                'card6title' => 'required',
                'card6text' => 'required',
            ]);
            $data->update($incomingFields);
        }
        return redirect('/admin');
    }
    public function showEditSection2(Section2 $data){
        return view('sections.section2', ['data' => $data]);
    }
    public function createSection2(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'card1title' => 'required',
            'card1text' => 'required',
            'card2title' => 'required',
            'card2text' => 'required',
            'card3title' => 'required',
            'card3text' => 'required',
            'card4title' => 'required',
            'card4text' => 'required',
            'card5title' => 'required',
            'card5text' => 'required',
            'card6title' => 'required',
            'card6text' => 'required',
        ]);
        
        Section2::create($incomingFields);
        return redirect('/admin');
    }

    public function checkSection2(Request $request){
        $Section2 = Section2::get();
        if (Auth::check()) {
            if (!$Section2->isEmpty()) { 
                return redirect('/admin/section2/1');
            }else{
                return view('sections.section2creating');
            }
        }
        return redirect('/admin');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Section4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Section4Controller extends Controller
{
    public function editSection4(Section4 $data, Request $request){
        if (Auth::check()) {
            $incomingFields = $request->validate([
                'subtitle' => 'required',
                'card1title' => 'required',
                'card1text' => 'required',
                'card2title' => 'required',
                'card2text' => 'required',
                'card3title' => 'required',
                'card3text' => 'required',
            ]);
            $data->update($incomingFields);
        }
        return redirect('/admin');
    }
    public function showEditSection4(Section4 $data){
        return view('sections.section4', ['data' => $data]);
    }
    public function createSection4(Request $request){
        $incomingFields = $request->validate([
            'subtitle' => 'required',
            'card1title' => 'required',
            'card1text' => 'required',
            'card2title' => 'required',
            'card2text' => 'required',
            'card3title' => 'required',
            'card3text' => 'required',
        ]);
        
        Section4::create($incomingFields);
        return redirect('/admin');
    }

    public function checkSection4(Request $request){
        $Section4 = Section4::get();
        if (Auth::check()) {
            if (!$Section4->isEmpty()) { 
                return redirect('/admin/section4/1');
            }else{
                return view('sections.section4creating');
            }
        }
        return redirect('/admin');
    }
}

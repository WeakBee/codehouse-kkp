<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function createForm(Request $request){
        $incomingFields = $request->validate([
            'category' => 'required',
            'client_email' => 'required',
            'client_name' => 'required',
            'client_company' => 'required',
            'client_phone' => 'required',
            'how_can_we_help' => 'required',
        ]);
        $incomingFields['client_email'] = strip_tags($incomingFields['client_email']);
        $incomingFields['client_name'] = strip_tags($incomingFields['client_name']);
        $incomingFields['client_company'] = strip_tags($incomingFields['client_company']);
        $incomingFields['client_phone'] = strip_tags($incomingFields['client_phone']);
        $incomingFields['how_can_we_help'] = strip_tags($incomingFields['how_can_we_help']);
        $incomingFields['read'] = "no";
        Form::create($incomingFields);
        return redirect('/form-success');
    }
    public function messagesView(){
        if (Auth::check()) {
            $form = Form::all();
            $form = $form->reverse();
            return view('message',['messages' => $form]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Section5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Section5Controller extends Controller
{
    //
    public function editSection5(Request $request, $id) {
        $incomingFields = $request->validate([
            'person_quote' => 'required',
            'person_name' => 'required',
            'person_position' => 'required',
            'person_company' => 'required',
        ]);
    
        $section5 = Section5::findOrFail($id); // Find the existing section 5 by its ID
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads/section5', $fileName);
    
            // Delete the previous file, if any
            if ($section5->person_image) {
                Storage::delete('public/uploads/section5/' . $section5->person_image);
            }
    
            $section5->person_image = $fileName;
        }
    
        $section5->fill($incomingFields);
        $section5->save();
    
        return redirect('/admin/section5');
    }
    public function showEditSection5($id){
        $data = Section5::find($id);
        return view('sections.section5showedit', compact('data'));
    }
    public function createSection5(Request $request){
        $incomingFields = $request->validate([
            'person_quote' => 'required',
            'person_name' => 'required',
            'person_position' => 'required',
            'person_company' => 'required',
        ]);
    
        $section5 = new Section5(); // Create a new instance of the Section5 model
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads/section5', $fileName); // Save file to storage directory
    
            $section5->person_image = $fileName; // Assign the file name to the person_image field
        }
    
        $section5->fill($incomingFields); // Fill the model instance with the remaining fields
        $section5->save(); // Save the model to the database
    
        return redirect('/admin/section5');
    }

    public function checkSection5(Request $request){
        $section5 = Section5::get();

        return view('sections.section5', ['section5' => $section5]);
    }

    public function creatingSection5(Request $request){
        return view('sections.section5creating');
    }

    public function deleteSection5($id){
        Section5::destroy($id);
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}

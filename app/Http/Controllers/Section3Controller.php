<?php

namespace App\Http\Controllers;

use App\Models\Section3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Section3Controller extends Controller
{
    //
    public function editSection3(Request $request, $id) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'small_description' => 'required',
            'description' => 'required',
        ]);
    
        $section3 = Section3::findOrFail($id); // Find the existing section 5 by its ID
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads/section3', $fileName);
    
            // Delete the previous file, if any
            if ($section3->case_image) {
                Storage::delete('public/uploads/section3/' . $section3->case_image);
            }
    
            $section3->case_image = $fileName;
        }
    
        $section3->fill($incomingFields);
        $section3->save();
    
        return redirect('/admin/section3');
    }
    public function showEditSection3($id){
        $data = Section3::find($id);
        return view('sections.section3showedit', compact('data'));
    }
    public function createSection3(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'small_description' => 'required',
            'description' => 'required',
        ]);
    
        $section3 = new Section3(); // Create a new instance of the Section5 model
    
        if ($request->hasFile('case_image')) {
            $file = $request->file('case_image');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/uploads/Section3', $fileName); // Save file to storage directory
    
            $section3->case_image = $fileName; // Assign the file name to the case_image field
        }
    
        $section3->fill($incomingFields); // Fill the model instance with the remaining fields
        $section3->save(); // Save the model to the database
    
        return redirect('/admin/section3');
    }

    public function checkSection3(Request $request){
        $section3 = Section3::get();

        return view('sections.section3', ['section3' => $section3]);
    }

    public function creatingSection3(Request $request){
        return view('sections.section3creating');
    }

    public function deleteSection3($id){
        Section3::destroy($id);
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}

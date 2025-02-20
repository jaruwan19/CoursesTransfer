<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestTransferController extends Controller
{
    public function requestTransfer(Request $request)
    {
        // Validate input fields
        $validatedData = $request->validate([
            'system_name' => 'required',
            'institution' => 'nullable|string',
            'graduation_date' => 'nullable|date',
            'student_original_code' => 'nullable|string',
            'major_original' => 'nullable|string',
            'transcript' => 'nullable|file|mimes:pdf,jpg,png|max:2048'
        ]);

        // Handle file upload
        if ($request->hasFile('transcript')) {
            $filePath = $request->file('transcript')->store('transcripts', 'public');
            $validatedData['transcript'] = $filePath;
        }

        // Store data in session
        session(['requestTransfer' => $validatedData]);

        // Redirect ไปยังหน้าประเภทการเทียบโอน
        return redirect()->route('typeTransfer');
    }

    
    public function showRequstTransfer()
    {
        // ดึงข้อมูลจาก Session
        $requestTransfer = session('requestTransfer', []);
        // dd($requestTransfer);
        return view('student.typeTransfer', compact('requestTransfer'));
    }
}

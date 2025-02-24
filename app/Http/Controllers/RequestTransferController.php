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
            'student_id_original' => 'nullable|string',
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

    public function showAllRequestTransfer(){
        $system_request = [
            [
                'system_name'=> "สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.",
                'institution'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'graduation_date'=> "20 มีนาคม 2567",
                'student_id_original'=> "6410014114",
                'major_original'=> "วิศวกรรมซอฟต์แวร์",
                'transcript'=> "transcrip.pdf",
                'type_transfer'=> "ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต"

            ]
        ];
        $subject_transfer = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
            ],
            [   
                'subject_code'=> "4121208c",
                'subject_name'=> "การออกแบบส่วนต่อประสานและประสบการณ์ผู้ใช้",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
            ],
            [   
                'subject_code'=> "4121404c",
                'subject_name'=> "คณิตศาสตร์ดีสครีตและพีชคณิตเชิงเส้น",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
            ],
            [   
                'subject_code'=> "4123312",
                'subject_name'=> "วิศวกรรมซอฟต์แวร์",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
            ],
            [   
                'subject_code'=> "4123214c",
                'subject_name'=> "วิศวกรรมความต้องการ",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
            ],
        ];
        // คำนวณผลรวมของหน่วยกิต
    $totalCredits = array_sum(array_column($subject_transfer, 'cradit'));

    return view('student/checkData', compact('system_request','subject_transfer', 'totalCredits'));       
    }
}

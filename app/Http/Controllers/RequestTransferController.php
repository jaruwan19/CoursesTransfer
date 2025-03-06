<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class RequestTransferController extends Controller
{
    public function index(Request $request)
    {
        $user = [
            'student_id' => '6410014107',
            'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
            'major_name' => 'วิศวกรรมซอฟต์แวร์'
        ];

        return view('student.systemTransfer', compact('user'));
    }
    public function requestTransfer(Request $request)
    {
        $validatedData = $request->validate([
            'system_name' => 'required',  // ตรวจสอบว่าไม่สามารถเป็นค่าว่างได้
            'institution' => 'nullable|string',
            'graduation_date' => 'nullable|date',
            'student_original_code' => 'nullable|string',
            'major_original' => 'nullable|string',
            'transcript' => 'required|file|mimes:pdf,jpg,png|max:2048'  // transcript ต้องไม่เป็นค่าว่างและเป็นไฟล์ที่รองรับ
        ]);

        // แปลงวันที่ให้เป็นรูปแบบที่ต้องการ (ภาษาไทย)
        if ($request->has('graduation_date') && !empty($request->graduation_date)) {
            try {
                $graduationDate = Carbon::createFromFormat('Y-m-d', $request->graduation_date)
                    ->locale('th')
                    ->isoFormat('D MMMM YYYY');
                $validatedData['graduation_date'] = $graduationDate;
            } catch (\Exception $e) {
                session()->flash('error', 'ไม่สามารถแปลงวันที่ได้');
                return redirect()->back()->withInput();
            }
        }

        if ($request->hasFile('transcript')) {
            // ตรวจสอบว่าไฟล์ที่อัปโหลดมีขนาดหรือประเภทไม่ตรงตามที่กำหนด
            $file = $request->file('transcript');
            if ($file->isValid()) {
                $filePath = $file->store('transcripts', 'public');
                $validatedData['transcript'] = $filePath;
            } else {
                session()->flash('error', 'ไฟล์ไม่ถูกต้องหรือเกิดข้อผิดพลาดในการอัปโหลด');
                return redirect()->back()->withInput();
            }
        } else {
            // หากไม่มีไฟล์อัปโหลด
            session()->flash('error', 'กรุณาอัปโหลดไฟล์ Transcript');
            return redirect()->back()->withInput();
        }

        session(['requestTransfer' => $validatedData]);

        $systemName = $request->input('system_name');
        if ($systemName == "ยกเว้นรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา จากมหาวิทยาลัยอื่น") {
            return redirect()->route('addSubject');
        }

        if ($systemName == "เทียบโอนรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา ลาออก พ้นสภาพนักศึกษาจากมหาวิทยาลัยราชภัฏศรีสะเกษ") {
            return redirect()->route('addOriginalSubject');
        }

        return redirect()->route('typeTransfer');
    }



    public function showRequestTransfer()
    {
        $requestTransfer = session('requestTransfer', null);

        if (!$requestTransfer) {
            return redirect()->route('requestTransfer')->with('error', 'กรุณากรอกข้อมูลก่อน');
        }
        $user = [
            'student_id' => '6410014107',
            'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
            'major_name' => 'วิศวกรรมซอฟต์แวร์'
        ];

        return view('student.typeTransfer', compact('user', 'requestTransfer'));
    }


    public function storeAddSubject(Request $request)
    {

        $validatedData = $request->validate([
            'original_subject_code.*' => 'required|string',
            'original_subject_name.*' => 'required|string',
            'original_count_unit.*' => 'required|integer',
            'original_grade.*' => 'required|string',
            'current_subject_code.*' => 'required|string',
            'current_subject_name.*' => 'required|string',
            'current_count_unit.*' => 'required|integer',
        ]);

        session([
            'addSubjectData' => [
                'original_subject_code' => $request->input('original_subject_code'),
                'original_subject_name' => $request->input('original_subject_name'),
                'original_count_unit' => $request->input('original_count_unit'),
                'original_grade' => $request->input('original_grade'),
                'current_subject_code' => $request->input('current_subject_code'),
                'current_subject_name' => $request->input('current_subject_name'),
                'current_count_unit' => $request->input('current_count_unit')
            ]
        ]);

        return redirect()->route('checkData');
    }

    public function showAddSubject()
    {
        $user = [
            'student_id' => '6410014107',
            'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
            'major_name' => 'วิศวกรรมซอฟต์แวร์'
        ];
        return view('student.addSubject', compact('user'));
    }

    public function storeAddOriginalSubject(Request $request)
    {

        $validatedData = $request->validate([
            'original_subject_code.*' => 'required|string',
            'original_subject_name.*' => 'required|string',
            'original_count_unit.*' => 'required|integer',
            'original_grade.*' => 'required|string',
            'current_subject_code.*' => 'required|string',
            'current_subject_name.*' => 'required|string',
            'current_count_unit.*' => 'required|integer',
        ]);

        session([
            'addOriginalSubjectData' => [
                'original_subject_code' => $request->input('original_subject_code'),
                'original_subject_name' => $request->input('original_subject_name'),
                'original_count_unit' => $request->input('original_count_unit'),
                'original_grade' => $request->input('original_grade'),
                'current_subject_code' => $request->input('current_subject_code'),
                'current_subject_name' => $request->input('current_subject_name'),
                'current_count_unit' => $request->input('current_count_unit')
            ]
        ]);

        return redirect()->route('checkData');
    }

    public function showAddOriginalSubject()
    {
        $user = [
            'student_id' => '6410014107',
            'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
            'major_name' => 'วิศวกรรมซอฟต์แวร์'
        ];
        return view('student.addOriginalSubject', compact('user'));
    }

    public function storeTypeTransfer(Request $request)
    {
        $selectedExemptions = $request->input('exemption', []);

        $requestTransfer = session('requestTransfer', []);
        $requestTransfer['selected_exemptions'] = $selectedExemptions;

        session(['requestTransfer' => $requestTransfer]);

        return redirect()->route('checkData');
    }

    public function showCheckData()
    {
        $user = [
            'student_id' => '6410014107',
            'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
            'major_name' => 'วิศวกรรมซอฟต์แวร์'
        ];
        $requestTransfer = session('requestTransfer', []);

        //ยกเว้นหมวดศึกษาทั่วไป 15 หน่วยกิต
        $exemptGeneralSubjects = [
            [
                'subject_code' => '1500126',
                'subject_name' => 'ภาษาไทยเพื่อการสื่อสารและการสืบค้นสารสนเทศ',
                'credit' => 3
            ],
            [
                'subject_code' => '1500127',
                'subject_name' => 'การอ่านและการเขียนภาษาอังกฤษ',
                'credit' => 3
            ],
            [
                'subject_code' => '1500132',
                'subject_name' => 'ภาษาอังกฤษและการสื่อสารในยุคดิจิทัล',
                'credit' => 3
            ],
            [
                'subject_code' => '4000117',
                'subject_name' => 'เทคโนโลยีดิจิทัลและการสื่อสาร',
                'credit' => 3
            ],
            [
                'subject_code' => '4002104',
                'subject_name' => 'การประยุกต์ใช้โปรแกรมสำนักงานในยุคดิจิทัล',
                'credit' => 3
            ],
        ];
        //ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ
        $exemptSpecificSubjects = [
            [
                'subject_code' => "4121206",
                'subject_name' => "การเขียนโปรแกรมคอมพิวเตอร์",
                'credit' => 3,
            ],
            [
                'subject_code' => "4121208c",
                'subject_name' => "การออกแบบส่วนต่อประสานและประสบการณ์ผู้ใช้",
                'credit' => 3,
            ],
            [
                'subject_code' => "4121404c",
                'subject_name' => "คณิตศาสตร์ดีสครีตและพีชคณิตเชิงเส้น",
                'credit' => 3,
            ],
            [
                'subject_code' => "4123312",
                'subject_name' => "วิศวกรรมซอฟต์แวร์",
                'credit' => 3,
            ],
            [
                'subject_code' => "4123214c",
                'subject_name' => "วิศวกรรมความต้องการ",
                'credit' => 3,
            ],
        ];


        return view('student.checkData', compact('user', 'requestTransfer', 'exemptGeneralSubjects', 'exemptSpecificSubjects'));
    }


    public function statusRequest()
    {
        $user = [
            'student_id' => '6410014107',
            'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
            'major_name' => 'วิศวกรรมซอฟต์แวร์'
        ];
        return view('status.statusRequest', compact('user'));
    }

    public function confirmTransfer(Request $request)
    {

        return redirect()->route('statusRequest');
    }
}

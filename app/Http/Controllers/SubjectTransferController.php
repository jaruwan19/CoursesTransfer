<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectTransferController extends Controller
{
    public function showSubjectTransfer(){
        $system_request = [
            [
                'syst_name'=> "สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.",
                'institution'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'graduation_date'=> "20 มีนาคม 2567",
                'student_original_code'=> "6410014114",
                'major_original'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'transcript'=> "transcrip.pdf",
                'type_transfer'=> "ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต"

                // 'user_id' => "1", 
                // 'syst_id' => "2", 
                // 'inst_id' => "3", 
                // 'graduation_date' => "20 มีนาคม 2567", 
                // 'student_original_code' => "", 
                // 'major_original_id' => "", 
                // 'transcrip' => "transcrip.pdf", 
                // 'trns_subj_id' => "1", 
                // 'status'
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

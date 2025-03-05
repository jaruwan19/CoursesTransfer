<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class RequestToClassPlanController extends Controller
{
    public function showStudentRequest()
    {
        $student_requests = [
            [
                'student_id' => '1234567890',
                'student_name' => 'นางสาวสมใจ หวังดี',
                'major_name' => 'วิศวกรรมซอฟต์แวร์',
                'transcript'=> "transcrip.pdf",
            ]
        ];
        return view('classPlan.student_request', compact('student_requests'));
    }

    public function showDataRequest()
    {
        $system_request = [
            [
                'system_name'=> "สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.",
                'institution'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'graduation_date'=> "20 มีนาคม 2567",
                'transcript'=> "transcrip.pdf",
            ]
        ];
        $type_transfer = [
            [
                'type_transfer'=> "(1) ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต"
            ],
            [
                'type_transfer'=> "(2) ยกเว้นเลือกเสรี 6 หน่วยกิต"
            ],
            [
                'type_transfer'=> "(3) ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ"
            ],
            [
                'type_transfer'=> "(4) ยกเว้นรายวิชาอื่น ๆ"
            ],
        ];

        $subject_transfer = [
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

        $original_subjects = [
            [   
                'subject_code'=> "4123214c",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'credit'=> 3,  
                'grad'=> 'A',
            ],
        ];
        $current_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "วิศวกรรมซอฟต์แวร์",
                'credit'=> 3,  
            ],
        ];
        // คำนวณผลรวมของหน่วยกิต
    // $totalCredits = array_sum(array_column($subject_transfer, 'credit'));

    return view('classPlan.check_subjects', compact('system_request','type_transfer','subject_transfer','original_subjects','current_subjects'));
    }

    public function showResultCheck()
    {
        $system_request = [
            [
                'system_name'=> "สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.",
                'institution'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'graduation_date'=> "20 มีนาคม 2567",
                'transcript'=> "transcrip.pdf",
            ]
        ];
        $type_transfer = [
            [
                'type_transfer'=> "(1) ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต"
            ],
            [
                'type_transfer'=> "(2) ยกเว้นเลือกเสรี 6 หน่วยกิต"
            ],
            [
                'type_transfer'=> "(3) ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ"
            ],
            [
                'type_transfer'=> "(4) ยกเว้นรายวิชาอื่น ๆ"
            ],
        ];

        $subject_transfer = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'credit'=> 3,  
            ],
            [   
                'subject_code'=> "4121208c",
                'subject_name'=> "การออกแบบส่วนต่อประสานและประสบการณ์ผู้ใช้",
                'credit'=> 3,  
            ],
            [   
                'subject_code'=> "4121404c",
                'subject_name'=> "คณิตศาสตร์ดีสครีตและพีชคณิตเชิงเส้น",
                'credit'=> 3,  
            ],
            [   
                'subject_code'=> "4123312",
                'subject_name'=> "วิศวกรรมซอฟต์แวร์",
                'credit'=> 3,  
            ],
            [   
                'subject_code'=> "4123214c",
                'subject_name'=> "วิศวกรรมความต้องการ",
                'credit'=> 3,  
            ],
        ];

        $original_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'credit'=> 3,  
                'grad'=> 'A',
            ],
        ];
        $current_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "วิศวกรรมซอฟต์แวร์",
                'credit'=> 3,  
            ],
        ];
        $result = [
            [
                'status'=> True,
                'note'=> "-",
                'massage'=> "-",
            ],
        ];
        // คำนวณผลรวมของหน่วยกิต
    // $totalCredits = array_sum(array_column($subject_transfer, 'credit'));

        return view('classPlan.result_check', compact('system_request','type_transfer','subject_transfer','original_subjects','current_subjects','result'));
    }

    public function showDataPreview()
    {
        $system_request = [
            [
                'system_name'=> "สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.",
                'institution'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'graduation_date'=> "20 มีนาคม 2567",
                'transcript'=> "transcrip.pdf",
            ]
        ];
        $type_transfer = [
            [
                'type_transfer'=> "(1) ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต"
            ],
            [
                'type_transfer'=> "(2) ยกเว้นเลือกเสรี 6 หน่วยกิต"
            ],
            [
                'type_transfer'=> "(3) ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ"
            ],
            [
                'type_transfer'=> "(4) ยกเว้นรายวิชาอื่น ๆ"
            ],
        ];

        $subject_transfer = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'credit'=> 3,  
            ],
            [   
                'subject_code'=> "4121208c",
                'subject_name'=> "การออกแบบส่วนต่อประสานและประสบการณ์ผู้ใช้",
                'credit'=> 3,  
            ],
            [   
                'subject_code'=> "4121404c",
                'subject_name'=> "คณิตศาสตร์ดีสครีตและพีชคณิตเชิงเส้น",
                'credit'=> 3,  
            ],
            [   
                'subject_code'=> "4123312",
                'subject_name'=> "วิศวกรรมซอฟต์แวร์",
                'credit'=> 3,  
            ],
            [   
                'subject_code'=> "4123214c",
                'subject_name'=> "วิศวกรรมความต้องการ",
                'credit'=> 3,  
            ],
        ];

        $original_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'credit'=> 3,  
                'grad'=> 'A',
            ],
        ];
        $current_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "วิศวกรรมซอฟต์แวร์",
                'credit'=> 3,  
            ],
        ];
        $result = [
            [
                'status'=> True,
                'note'=> "-",
                'massage'=> "-",
            ],
        ];
        // คำนวณผลรวมของหน่วยกิต
    // $totalCredits = array_sum(array_column($subject_transfer, 'credit'));

        return view('classPlan.data_preview', compact('system_request','type_transfer','subject_transfer','original_subjects','current_subjects','result'));
    }
}

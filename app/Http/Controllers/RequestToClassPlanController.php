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
                'student_id_original'=> "6410014114",
                'major_original'=> "วิศวกรรมซอฟต์แวร์",
                'transcript'=> "transcrip.pdf",
            ]
        ];
        $type_transfer = [
            [
                'type_transfer'=> "ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต"
            ],
            [
                'type_transfer'=> "ยกเว้นเลือกเสรี 6 หน่วยกิต"
            ],
            [
                'type_transfer'=> "ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัย"
            ],
            [
                'type_transfer'=> "ยกเว้นรายวิชาอื่น ๆ"
            ],
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

        $original_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
                'grad'=> 'A',
            ],
        ];
        $current_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
            ],
        ];
        // คำนวณผลรวมของหน่วยกิต
    // $totalCredits = array_sum(array_column($subject_transfer, 'cradit'));

    return view('classPlan.check_subjects', compact('system_request','type_transfer','subject_transfer','original_subjects','current_subjects'));
    }

    public function showResultCheck()
    {
        $system_request = [
            [
                'system_name'=> "สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.",
                'institution'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'graduation_date'=> "20 มีนาคม 2567",
                'student_id_original'=> "6410014114",
                'major_original'=> "วิศวกรรมซอฟต์แวร์",
                'transcript'=> "transcrip.pdf",
            ]
        ];
        $type_transfer = [
            [
                'type_transfer'=> "ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต"
            ],
            [
                'type_transfer'=> "ยกเว้นเลือกเสรี 6 หน่วยกิต"
            ],
            [
                'type_transfer'=> "ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัย"
            ],
            [
                'type_transfer'=> "ยกเว้นรายวิชาอื่น ๆ"
            ],
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

        $original_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
                'grad'=> 'A',
            ],
        ];
        $current_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
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
    // $totalCredits = array_sum(array_column($subject_transfer, 'cradit'));

        return view('classPlan.result_check', compact('system_request','type_transfer','subject_transfer','original_subjects','current_subjects','result'));
    }

    public function showDataPreview()
    {
        $system_request = [
            [
                'system_name'=> "สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.",
                'institution'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'graduation_date'=> "20 มีนาคม 2567",
                'student_id_original'=> "6410014114",
                'major_original'=> "วิศวกรรมซอฟต์แวร์",
                'transcript'=> "transcrip.pdf",
            ]
        ];
        $type_transfer = [
            [
                'type_transfer'=> "ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต"
            ],
            [
                'type_transfer'=> "ยกเว้นเลือกเสรี 6 หน่วยกิต"
            ],
            [
                'type_transfer'=> "ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัย"
            ],
            [
                'type_transfer'=> "ยกเว้นรายวิชาอื่น ๆ"
            ],
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

        $original_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
                'grad'=> 'A',
            ],
        ];
        $current_subjects = [
            [   
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'cradit'=> 3,  // เปลี่ยนเป็น integer แทน string
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
    // $totalCredits = array_sum(array_column($subject_transfer, 'cradit'));

        return view('classPlan.data_preview', compact('system_request','type_transfer','subject_transfer','original_subjects','current_subjects','result'));
    }
}

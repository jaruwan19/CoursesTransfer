<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageSubjectController extends Controller
{
    public function showSubjects()
    {
        //หมวดศึกษาทั่วไป 15 หน่วยกิต
        $generalSubjects = [
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

        //หมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ
        $specificSubjects = [
            [   
                'courses'=> "วิศวกรรมศาตรบัณฑิต",
                'major_name'=> "วิศวกรรมซอฟต์แวร์",
                'subject_code'=> "4121206",
                'subject_name'=> "การเขียนโปรแกรมคอมพิวเตอร์",
                'credit'=> 3,  
            ],
            [   
                'courses'=> "วิศวกรรมศาตรบัณฑิต",
                'major_name'=> "วิศวกรรมซอฟต์แวร์",
                'subject_code'=> "4121208c",
                'subject_name'=> "การออกแบบส่วนต่อประสานและประสบการณ์ผู้ใช้",
                'credit'=> 3,  
            ],
            [   
                'courses'=> "วิศวกรรมศาตรบัณฑิต",
                'major_name'=> "วิศวกรรมซอฟต์แวร์",
                'subject_code'=> "4121404c",
                'subject_name'=> "คณิตศาสตร์ดีสครีตและพีชคณิตเชิงเส้น",
                'credit'=> 3,  
            ],
            [   
                'courses'=> "วิศวกรรมศาตรบัณฑิต",
                'major_name'=> "วิศวกรรมซอฟต์แวร์",
                'subject_code'=> "4123312",
                'subject_name'=> "วิศวกรรมซอฟต์แวร์",
                'credit'=> 3,  
            ],
            [   
                'courses'=> "วิศวกรรมศาตรบัณฑิต",
                'major_name'=> "วิศวกรรมซอฟต์แวร์",
                'subject_code'=> "4123214c",
                'subject_name'=> "วิศวกรรมความต้องการ",
                'credit'=> 3,  
            ],
            
        ];

        //รายวิชาอื่น ๆ
        $otherSubjects = [
            [   
                'subject_code' => '1521212', 
                'subject_name' => 'จริยธรรมกับชีวิต', 
                'credit' => 3
            ],
            [
                'subject_code' => '4000119', 
                'subject_name' => 'การคิดและการตัดสินใจ', 
                'credit' => 3
            ],
            [
                'subject_code' => '4032229', 
                'subject_name' => 'การออกกำลังกายแบบบูรณาการสำหรับคนยุคใหม่', 
                'credit' => 3
            ],
        ];
        

        return view('officer.manage_subjects', compact('generalSubjects', 'specificSubjects', 'otherSubjects'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestTransferController extends Controller
{
    public function showSystemTransfer(){
        $system_request = [
            [
                'syst_name'=> "สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.",
                'institution'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'graduation_date'=> "20 มีนาคม 2567",
                'student_original_code'=> "6410014114",
                'major_original'=> "วิทยาลัยเทคนิคศรีสะเกษ",
                'transcript'=> "transcrip.pdf",

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
        return view('student/typeTransfer', compact('system_request'));       
    }
}

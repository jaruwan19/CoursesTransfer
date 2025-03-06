<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestToAdvisorController extends Controller
{
    public function showStudentRequest()
    {
        $user = [
            'advisor_name' => 'ดร.ปฏิมากร จริยฐิติพงศ์',
            'major_name' => 'วิศวกรรมซอฟต์แวร์'
        ];

        $student_requests = [
            [
                'student_id' => '6410014107',
                'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
                'transcript' => "transcrip.pdf",
            ]
        ];
        return view('advisor.adv_student_request', compact('user', 'student_requests'));
    }
}

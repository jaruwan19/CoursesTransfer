<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestToAdvisorController extends Controller
{
    public function showStudentRequest()
    {
        $student_requests = [
            [
                'student_id' => '1234567890',
                'student_name' => 'นางสาวสมใจ หวังดี',
                'transcript'=> "transcrip.pdf",
            ]
        ];
        return view('advisor.adv_student_request', compact('student_requests'));
    }
        
}

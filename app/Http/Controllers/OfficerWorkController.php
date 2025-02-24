<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerWorkController extends Controller
{
    public function recieveDocsRequest()
    {
        $student_requests = [
            [
                'student_id' => '1234567890',
                'student_name' => 'นางสาวสมใจ หวังดี',
                'major_name' => 'วิศวกรรมซอฟต์แวร์',
            ]
        ];
        return view('officer.receive_docs', compact('student_requests'));
    }
    public function recievePaymentRequest()
    {
        $student_requests = [
            [
                'student_id' => '1234567890',
                'student_name' => 'นางสาวสมใจ หวังดี',
                'major_name' => 'วิศวกรรมซอฟต์แวร์',
            ]
        ];
        return view('officer.receive_payment', compact('student_requests'));
    }
    public function paymentUpdate()
    {
        $student_requests = [
            [
                'student_id' => '1234567890',
                'student_name' => 'นางสาวสมใจ หวังดี',
                'major_name' => 'วิศวกรรมซอฟต์แวร์',
            ]
        ];
        return view('officer.payment_update', compact('student_requests'));
    }
}

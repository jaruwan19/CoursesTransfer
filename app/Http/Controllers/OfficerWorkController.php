<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerWorkController extends Controller
{
    public function recieveDocsRequest()
    {
        $user = [
            'officer_name' => 'ดร.ปฏิมากร จริยฐิติพงศ์',
        ];

        $student_requests = [
            [
                'student_id' => '6410014107',
                'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
                'major_name' => 'วิศวกรรมซอฟต์แวร์'
            ]
        ];
        return view('officer.receive_docs', compact('user', 'student_requests'));
    }
    public function recievePaymentRequest()
    {
        $user = [
            'officer_name' => 'ดร.ปฏิมากร จริยฐิติพงศ์',
        ];

        $student_requests = [
            [
                'student_id' => '6410014107',
                'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
                'major_name' => 'วิศวกรรมซอฟต์แวร์'
            ]
        ];
        return view('officer.receive_payment', compact('user', 'student_requests'));
    }
    public function paymentUpdate()
    {
        $user = [
            'officer_name' => 'ดร.ปฏิมากร จริยฐิติพงศ์',
        ];

        $student_requests = [
            [
                'student_id' => '6410014107',
                'student_name' => 'นาย ภัทรนันท์ ประสานสุข',
                'major_name' => 'วิศวกรรมซอฟต์แวร์'
            ]
        ];
        return view('officer.payment_update', compact('user', 'student_requests'));
    }
}

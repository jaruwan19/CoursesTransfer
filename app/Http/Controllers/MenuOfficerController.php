<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuOfficerController extends Controller
{
    public function selectMenu()
    {
        $user = [
            'officer_name' => 'ดร.ปฏิมากร จริยฐิติพงศ์',
        ];

        $menuItems = [
            ['route' => '/receive_docs', 'img' => 'petition.png', 'text' => 'รับเอกสารคำร้อง'],
            ['route' => '/receive_payment', 'img' => 'updated.png', 'text' => 'อัปเดตสถานะเพื่อแจ้งพิมพ์ใบชำระเงิน'],
            ['route' => '/payment_update', 'img' => 'payment-service.png', 'text' => 'อัปเดตการชำระเงิน'],
            ['route' => '/search_requests', 'img' => 'serch_request.png', 'text' => 'ค้นหาคำร้อง'],
            ['route' => '/manage_subjects', 'img' => 'management.png', 'text' => 'จัดการรายวิชา']
        ];

        // ส่งข้อมูลเมนูไปยัง View
        return view('officer.menu', compact('user', 'menuItems'));
    }
}

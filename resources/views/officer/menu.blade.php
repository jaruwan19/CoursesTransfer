@extends('officer.layout')
@section('content')
    <div class="menuofficer-grid">
        <a href="/receive_documents" class="menuofficer-button">
            <img src="https://png.pngtree.com/png-clipart/20190619/original/pngtree-vector-documents-icon-png-image_3994875.jpg"
                alt="รับเอกสารคำร้อง">
            <span class="menuofficer-text">รับเอกสารคำร้อง</span>
        </a>
        <a href="/update_status" class="menuofficer-button">
            <img src="https://png.pngtree.com/png-clipart/20190619/original/pngtree-vector-documents-icon-png-image_3994875.jpg"
                alt="อัปเดตสถานะเพื่อแจ้งพิมพ์ใบชำระเงิน">
            <span class="menuofficer-text">อัปเดตสถานะเพื่อแจ้งพิมพ์ใบชำระเงิน</span>
        </a>
        <a href="/update_payment" class="menuofficer-button">
            <img src="https://png.pngtree.com/png-clipart/20190619/original/pngtree-vector-documents-icon-png-image_3994875.jpg"
                alt="อัปเดตการชำระเงิน 5">
            <span class="menuofficer-text">อัปเดตการชำระเงิน</span>
        </a>
        <a href="/search_requests" class="menuofficer-button">
            <img src="https://png.pngtree.com/png-clipart/20190619/original/pngtree-vector-documents-icon-png-image_3994875.jpg"
                alt="ค้นหาคำร้อง">
            <span class="menuofficer-text">ค้นหาคำร้อง</span>
        </a>
        <a href="/manage_subjects" class="menuofficer-button">
            <img src="https://png.pngtree.com/png-clipart/20190619/original/pngtree-vector-documents-icon-png-image_3994875.jpg"
                alt="จัดการรายวิชา">
            <span class="menuofficer-text">จัดการรายวิชา</span>
        </a>
    </div>
@endsection

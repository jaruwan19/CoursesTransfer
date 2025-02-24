@extends('officer.layout')
@section('content')
    <div class="menuofficer-grid">
        <a href="/receive_docs" class="menuofficer-button">
            <img src="{{ asset('img/petition.png') }}" alt="รับเอกสารคำร้อง">
            <span class="menuofficer-text">รับเอกสารคำร้อง</span>
        </a>
        <a href="/receive_payment" class="menuofficer-button">
            <img src="{{ asset('img/updated.png') }}" alt="อัปเดตสถานะเพื่อแจ้งพิมพ์ใบชำระเงิน">
            <span class="menuofficer-text">อัปเดตสถานะเพื่อแจ้งพิมพ์ใบชำระเงิน</span>
        </a>
        <a href="/payment_update" class="menuofficer-button">
            <img src="{{ asset('img/payment-service.png') }}"alt="อัปเดตการชำระเงิน">
            <span class="menuofficer-text">อัปเดตการชำระเงิน</span>
        </a>
        <a href="/search_requests" class="menuofficer-button">
            <img src="{{ asset('img/serch_request.png') }}"alt="ค้นหาคำร้อง">
            <span class="menuofficer-text">ค้นหาคำร้อง</span>
        </a>
        <a href="/manage_subjects" class="menuofficer-button">
            <img src="{{ asset('img/management.png') }}"alt="จัดการรายวิชา">
            <span class="menuofficer-text">จัดการรายวิชา</span>
        </a>
    </div>
@endsection

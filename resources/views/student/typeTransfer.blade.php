@extends('layout')
@section('content')
    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">รหัสนักศึกษา :</h6>
            <h6>{{ $user['student_id'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>{{ $user['student_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
        <div>
            <h6 class="fw-bolder">สาขาวิชา :</h6>
            <h6>{{ $user['major_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
    </div>
    <div class="container p-3 border border-1 justify-content-center">
        <!-- Stepprogress -->
        <div>
            <section class="step-wizard">
                <ul class="step-wizard-list">
                    <li class="step-wizard-item ">
                        <span class="progress-count">1</span>
                        <span class="progress-label">เลือกระบบเทียนโอนรายวิชา</span>
                    </li>
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">2</span>
                        <span class="progress-label">เพิ่มข้อมูลการยื่นคำร้อง</span>
                    </li>
                    <li class="step-wizard-item ">
                        <span class="progress-count">3</span>
                        <span class="progress-label">ยืนยันการยื่นคำร้อง</span>
                    </li>
                </ul>
            </section>
        </div>
        <!-- Stepprogress -->
        <h4 class="header">ยื่นคำร้อง</h4>
        <div class="container border border-1 justify-content-center">
            <div class="container p-3">
                <div class="row">
                    <div class="col-2 text-warning fw-bold">
                        <p>ขอยกเว้นรายวิชา :</p>
                    </div>
                    <div class="col-10">
                        <p>{{ session('requestTransfer.system_name') ?? 'ไม่มีข้อมูล' }}</p>
                    </div>
                </div>
                @if (session('requestTransfer.system_name') === 'ยกเว้นรายวิชา สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.' ||
                        session('requestTransfer.system_name') === 'ยกเว้นรายวิชา สำหรับนักศึกษาที่สำเร็จการศึกษาระดับปริญญาตรี')
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>สถาบันการศึกษา :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ session('requestTransfer.institution') ?? 'ไม่มีข้อมูล' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>วันที่สำเร็จการศึกษา :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ session('requestTransfer.graduation_date') ?? 'ไม่มีข้อมูล' }}</p>
                        </div>
                    </div>
                @endif
                @if (session('requestTransfer.system_name') === 'ยกเว้นรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา จากมหาวิทยาลัยอื่น')
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>สถาบันการศึกษาเดิม :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ session('requestTransfer.institution') ?? 'ไม่มีข้อมูล' }}</p>
                        </div>
                    </div>
                @endif

                @if (session('requestTransfer.system_name') ===
                        'เทียบโอนรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา ลาออก พ้นสภาพนักศึกษาจากมหาวิทยาลัยราชภัฏศรีสะเกษ')
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>รหัสนักศึกษาเดิม :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ session('requestTransfer.student_original_code') ?? 'ไม่มีข้อมูล' }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>สาขาวิชาเดิม :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ session('requestTransfer.major_original') ?? 'ไม่มีข้อมูล' }}</p>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-2 text-warning fw-bold">
                        <p>ใบรายงานผลการเรียน :</p>
                    </div>
                    <div class="col-9">
                        @if (session('requestTransfer.transcript'))
                            <a href="{{ asset('storage/' . session('requestTransfer.transcript')) }}" target="_blank">
                                ดาวน์โหลด <i class="bi bi-file-pdf text-danger"></i>
                            </a>
                        @else
                            ไม่มีข้อมูล
                        @endif
                    </div>
                </div>
                <form action="{{ route('storeTypeTransfer') }}" method="POST">
                    @csrf
                    <div class="container-form">
                        <h5 class="form-header p-2">เลือกประเภทการเทียบโอน/ยกเว้นรายวิชา</h5>

                        <div class="form-check m-2">
                            <input class="form-check-input" type="checkbox" name="exemption[]"
                                value="ยกเว้นหมวดศึกษาทั่วไป 15 หน่วยกิต" id="exempt1">
                            <label class="form-check-label" for="exempt1">ยกเว้นหมวดศึกษาทั่วไป 15 หน่วยกิต</label>
                        </div>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="checkbox" name="exemption[]"
                                value="ยกเว้นเลือกเสรี 6 หน่วยกิต" id="exempt2">
                            <label class="form-check-label" for="exempt2">ยกเว้นเลือกเสรี 6 หน่วยกิต</label>
                        </div>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="checkbox" name="exemption[]"
                                value="ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ" id="exempt3">
                            <label class="form-check-label"
                                for="exempt3">ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ</label>
                        </div>
                        <div class="form-check m-2">
                            <input class="form-check-input" type="checkbox" name="exemption[]" value="ยกเว้นรายวิชาอื่น ๆ"
                                id="exempt4">
                            <label class="form-check-label" for="exempt4">ยกเว้นรายวิชาอื่น ๆ</label>
                        </div>
                    </div>

                    <div class="p-2 mt-3 mb-3 d-flex justify-content-between">
                        <a href="#" onclick="history.back();" class="btn outline-darkblue btn-lg">ย้อนกลับ</a>
                        <button type="submit" class="btn btn-darkblue btn-lg">ถัดไป</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

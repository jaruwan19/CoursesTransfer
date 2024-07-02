@extends('layout')
@section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <h2 class="header">สถานะคำร้อง</h2>
        <div class="container border border-1 justify-content-center">
            <div class="container p-3">
                <div class="row">
                    <div class="col fw-bold text-end">
                        <p>สถานะปัจจุบัน :</p>
                    </div>
                    <div class="col fw-bold text-success">
                        <p>ตรวจสอบรายวิชาเรียบร้อยแล้ว</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col fw-bold text-end">
                        <p>ขั้นตอนถัดไป :</p>
                    </div>
                    <div class="col fw-bold text-darkblue">
                        <p>คัดลอก link ส่งให้อาจารย์ที่ปรึกษาเห็นชอบ</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <button type="submit" class="btn btn-darkblue">คัดลอกลิงก์</button>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
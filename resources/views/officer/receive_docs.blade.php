@extends('layout')
@section('content')
    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>{{ $user['officer_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
    </div>
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">รับเอกสารคำร้อง</h4>
        <div class="container border p-2">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center align-items-center">
                        <label for="barcodeInput" class="m-2 fw-bold">รหัสบาร์โค้ด :</label>
                        <input type="text" id="barcodeInput" class="form-control w-25" placeholder="Scan Barcode">
                        <button id="submitButton" class="btn btn-success m-2">ยืนยัน</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-2 p-0 border border-1 justify-content-center">
            <table class="table mt-2 border border-1">
                <thead class="table bg-gold">
                    <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>สาขา</th>
                        <th>ข้อมูลคำร้อง</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student_requests as $item)
                        <tr>
                            <td>{{ $item['student_id'] }}</td>
                            <td>{{ $item['student_name'] }}</td>
                            <td>{{ $item['major_name'] }}</td>
                            <td>
                                <a href="{{ url('data_preview') }}"
                                    class="btn btn-sm outline-darkblue rounded-pill w-50">ดูข้อมูล</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{-- หน้านี้อาจไมได้ใช้ --}}
@extends('student.layout')
@section('content')
    <div class="container border border-1 justify-content-center">
        <div class="container p-3">
            <div class="row">
                <div class="col-2 text-warning fw-bold">
                    <p>ขอยกเว้นรายวิชา :</p>
                </div>
                <div class="col-10">
                    <p>สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2 text-warning fw-bold">
                    <p>สถาบันการศึกษาเดิม :</p>
                </div>
                <div class="col-10">
                    <p>วิทยาลัยเทคนิคศรีสะเกษ</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2 text-warning fw-bold">
                    <p>วันที่สำเร็จการศึกษา :</p>
                </div>
                <div class="col-10">
                    <p>20 มีนาคม 2567</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2 text-warning fw-bold">
                    <p>ใบรายงานผลการเรียน :</p>
                </div>
                <div class="col-10">
                    <a href="#">transcrip.pdf</a>
                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                </div>
            </div>
            <hr>
        </div>
        <form action="" class="form">
            @csrf
            <div class="container-form ">
                <div >
                    <h5 class="text-darkblue"><i class="bi bi-caret-right-fill"></i> ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต</h5>
                </div>
                <table class="table">
                    <thead class="table bg-gold">
                        <tr>
                            <th>รหัสวิชา</th>
                            <th>ชื่อวิชา</th>
                            <th>หน่วยกิต</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>4123315</td>
                        <td>การบริหารโครงการซอฟต์แวร์</td>
                        <td>3</td>
                        </tr>
                        <tr>
                        <td>4123315</td>
                        <td>การบริหารโครงการซอฟต์แวร์</td>
                        <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        
            <div >
                <h5 class="text-darkblue"><i class="bi bi-caret-right-fill"></i> ยกเว้นหมวดเลือกเสรี 6 หน่วยกิต</h5>
            </div>

            <div class="container-form">
                <div >
                    <h5 class="text-darkblue"><i class="bi bi-caret-right-fill"></i> ยกเว้นรายวิชาอื่นๆ</h5>
                </div>
                <table class="table border border-1">
                    <thead class="table bg-gold text-center">
                        <tr class="table-light">
                            <th colspan="4">ข้อมูลรหัสนักศึกษาเดิม</th>
                            <th colspan="6" class="border-start">ข้อมูลรหัสนักศึกษาเดิม</th>
                        </tr>
                        <tr class="text-start">
                            <th>รหัสวิชา</th>
                            <th>ชื่อวิชา</th>
                            <th>หน่วยกิต</th>
                            <th class="border-end">เกรด</th>
                            <th>รหัสวิชา</th>
                            <th>ชื่อวิชา</th>
                            <th>หน่วยกิต</th>
                            <th>ผลการตรวจสอบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>4123315</td>
                            <td>การบริหารโครงการซอฟต์แวร์</td>
                            <td>3</td>
                            <td class="border-end">2.5</td>
                            <td>4123315</td>
                            <td>การบริหารโครงการซอฟต์แวร์</td>
                            <td>3</td>
                            <td class="text-success text-center">อนุมัติ</td>
                        </tr>
                        <tr>
                            <td>4123315</td>
                            <td>การบริหารโครงการซอฟต์แวร์</td>
                            <td>3</td>
                            <td class="border-end">2.5</td>
                            <td>4123315</td>
                            <td>การบริหารโครงการซอฟต์แวร์</td>
                            <td>3</td>
                            <td class="text-success text-center">อนุมัติ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container p-3 border rounded shadow-sm bg-light">
                <div class="row align-items-center text-darkblue fs-5">
                    <div class="col text-end fw-bold">
                        <p class="mb-0">รวมหน่วยกิตที่ยกเว้นรายวิชา</p>
                    </div>
                    <div class="col-auto">
                        <input class="form-control text-center fw-bold border-0 bg-white shadow-sm px-3 fs-5" 
                            type="text" value="15" readonly style="max-width: 100px;">
                    </div>
                    <div class="col text-start fw-bold">
                        <p class="mb-0">หน่วยกิต</p>
                    </div>
                </div>
            </div>

            <div class="p-2 mt-3 mb-3 d-flex justify-content-between">
                <a href="{{url('/adv_study_request')}}" class="btn btn outline-darkblue btn-lg " name="cancle">ย้อนกลับ</a>
            </div>
        </form>
    </div>
@endsection
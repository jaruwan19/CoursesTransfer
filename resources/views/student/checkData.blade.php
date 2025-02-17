@extends('student.layout')
@section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <!-- Stepprogress -->
        <div>
            <section class="step-wizard">
                <ul class="step-wizard-list">
                    <li class="step-wizard-item ">
                        <span class="progress-count">1</span>
                        <span class="progress-label">เลือกระบบเทียนโอนรายวิชา</span>
                    </li>
                    <li class="step-wizard-item ">
                        <span class="progress-count">2</span>
                        <span class="progress-label">เลือกประเภทการเทียบโอน</span>
                    </li>
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">3</span>
                        <span class="progress-label">ยืนยันการยื่นคำร้อง</span>
                    </li>
                </ul>
            </section>
            <!-- Stepprogress -->
        <h4 class="header">ยื่นคำร้อง</h4>
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
                    <div class="row p-0">
                        <h5 class="form-header-show" >ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต</h5>
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
                    <h5 class="form-header-show">ยกเว้นหมวดเลือกเสรี 6 หน่วยกิต</h5>
                </div>
                <div class="container border border-1 pt-2">
                    <div class="row p-0 text-center text-darkblue fs-5">
                        <div class="col text-end"><p>รวมหน่วยกิตที่ยกเว้นรายวิชา</p></div>
                        <div class="col">
                            <input class="inputShow" type="text">
                        </div>
                        <div class="col text-start"><p>หน่วยกิต</p></div>
                    </div>
                </div>

                <div class="p-2 mt-3 mb-3 d-flex justify-content-between">
                    <a href="{{url('/typeTransfer')}}" class="btn btn outline-darkblue btn-lg " name="cancle">ยกเลิก</a>
                    <a href="{{url('/statusRequest')}}"class="btn btn-darkblue btn-lg " name="submit">ยืนยันการยกเว้นรายวิชา</a>
                </div>
            </form>
        </div>
    </div>

@endsection
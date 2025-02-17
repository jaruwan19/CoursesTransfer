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
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">2</span>
                        <span class="progress-label">เลือกประเภทการเทียบโอน</span>
                    </li>
                    <li class="step-wizard-item ">
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
            </div>
            <form action="" class="form"  method="post">
                @csrf
                <div class="container-form ">
                    <div class="row p-0">
                        <h5 class="form-header p-2 " >เลือกประเภทการเทียบโอน/ยกเว้นรายวิชา</h5>
                    </div>
                    <div class="form-check m-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ยกเว้นหมวดศึกษาทั่วไป 15 หน่วยกิต
                        </label>
                      </div>
                      <div class="form-check m-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                        <label class="form-check-label" for="flexCheckDefault">
                            ยกเว้นเลือกเสรี 6 หน่วยกิต
                        </label>
                      </div>
                      <div class="form-check m-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                        <label class="form-check-label" for="flexCheckDefault">
                            ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ
                        </label>
                      </div>
                      <div class="form-check m-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                        <label class="form-check-label" for="flexCheckDefault">
                            ยกเว้นรายวิชาอื่น ๆ
                        </label>
                    </div>
                </div>
                
                <div class="p-2 mt-3 mb-3 d-flex justify-content-between">
                    <a href="{{url('/systemTransfer')}}" class="btn outline-darkblue btn-lg" name="cancle">ยกเลิก</a>
                    <a href="{{url('/checkData')}}" class="btn btn-darkblue btn-lg" name="submit">ยืนยัน</a>
                </div>
            </form>
        </div>
    </div>
@endsection
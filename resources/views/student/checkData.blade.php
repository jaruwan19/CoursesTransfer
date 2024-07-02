@extends('student.layout')
@section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <h2 class="header">ยื่นคำร้อง</h2>
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
                <div class="container-form ">
                    <div class="row p-0">
                        <h5 class="form-header-show" >ยกเว้นหมวดศึกษาทั่วไป  15 หน่วยกิต</h5>
                    </div>
                    <table class="table">
                        <thead class="table-primary">
                          <tr>
                            <td>รหัสวิชา</td>
                            <td>ชื่อวิชา</td>
                            <td>หน่วยกิต</td>
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
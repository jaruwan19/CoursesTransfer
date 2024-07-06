    @extends('student.layout')
    @section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <!-- Stepprogress -->
        <div>
            <section class="step-wizard">
                <ul class="step-wizard-list">
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">1</span>
                        <span class="progress-label">เลือกระบบเทียนโอนรายวิชา</span>
                    </li>
                    <li class="step-wizard-item ">
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
            <form action="" class="form"  method="post">
                <div class="container-form">
                    <div class="row p-0">
                        <h5 class="form-header p-2 " > เลือกระบบเทียบโอน/ยกเว้นรายวิชา</h5>
                    </div>
                    <div class="form-check m-2">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">
                        <label class="form-check-label" for="radio1">ยกเว้นรายวิชา สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.</label>
                    </div>
                    <div class="form-check m-2">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                        <label class="form-check-label" for="radio2">ยกเว้นรายวิชา สำหรับนักศึกษาที่สำเร็จการศึกษาระดับปริญญาตรี</label>
                    </div>
                    <div class="form-check m-2">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                        <label class="form-check-label">ยกเว้นรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา จากมหาวิทยาลัยอื่น</label>
                    </div>
                    <div class="form-check m-2">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                        <label class="form-check-label">เทียบโอนรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา ลาออก พ้นสภาพนักศึกษาจากมหาวิทยาลัยราชภัฏศรีสะเกษ</label>
                    </div>
                </div>
                <div class="container-form mt-3">
                    <div class="row p-0">
                        <h5 class="form-header p-2" >
                            เลือกสถาบันการศึกษา
                        </h5>
                    </div>
                    <div class="m-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled hidden>เลือกสถาบันการศึกษา</option>
                            <option value="1">วิทยาลัยเทคนิคศรีสะเกษ</option>
                            <option value="2">วิทยาลัยเทคนิคยโสธร</option>
                            <option value="3">วิทยาลัยเทคนิคอุบลราชธานี</option>
                        </select>
                    </div>
                </div>
                <div class="container-form mt-3">
                    <div class="row p-0">
                        <h5 class="form-header p-2" >วันที่สำเร็จการศึกษา</h5>
                    </div>
                    <div class="m-2">
                        <input type="date" class="form-control" id="datepicker" name="datepicker">
                    </div>
                </div>
                <div class="container-form mt-3">
                    <div class="row p-0">
                        <h5 class="form-header p-2">อัปโหลดใบรายงานผลการเรียน</h5>
                    </div>
                    <div class="container-dotted p-3 mt-2" >
                        <div class="input-group ">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                    </div>
                </div>
                <div class="p-2 mt-3 d-flex justify-content-end">
                    
                    <a href="{{url('/typeTransfer')}}" class="btn btn-darkblue btn-lg " name="submit">ยืนยัน</a>
                </div>
            </form>
        </div>
    </div>
    @endsection

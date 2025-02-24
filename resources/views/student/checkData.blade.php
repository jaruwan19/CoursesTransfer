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
                @foreach ($system_request as $item)
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>ขอยกเว้นรายวิชา :</p>
                        </div>
                        <div class="col-10">
                            <p>{{$item["syst_name"]}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>สถาบันการศึกษาเดิม :</p>
                        </div>
                        <div class="col-10">
                            <p>{{$item["institution"]}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>วันที่สำเร็จการศึกษา :</p>
                        </div>
                        <div class="col-10">
                            <p>{{$item["graduation_date"]}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>รหัสนักศึกษาเดิม :</p>
                        </div>
                        <div class="col-10">
                            <p>{{$item["student_id_original"]}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>สถาบันการศึกษาเดิม :</p>
                        </div>
                        <div class="col-10">
                            <p>{{$item["major_original"]}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>ใบรายงานผลการเรียน :</p>
                        </div>
                        <div class="col-10">
                            <a href="#">{{$item["transcript"]}}</a>
                            <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                        </div>
                    </div> 
                @endforeach
            <hr>
            </div>
            <form action="" class="form">
                @csrf
                <div class="container-form ">
                    @foreach($system_request as $transfer)
                        <div class="row p-0">
                            <h5 class="form-header-show" >{{ $transfer['type_transfer']}}</h5>
                        </div>
                    @endforeach
                    
                    <table class="table">
                        <thead class="table bg-gold">
                            <tr>
                                <th>รหัสวิชา</th>
                                <th>ชื่อวิชา</th>
                                <th>หน่วยกิต</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subject_transfer as $item)
                                <tr>
                                    <td>{{$item["subject_code"]}}</td>
                                    <td>{{$item["subject_name"]}}</td>
                                    <td>{{$item["cradit"]}}</td>
                                </tr>
                            @endforeach
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
                                   type="text" value="{{ $totalCredits }}" readonly style="max-width: 100px;">
                        </div>
                        <div class="col text-start fw-bold">
                            <p class="mb-0">หน่วยกิต</p>
                        </div>
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
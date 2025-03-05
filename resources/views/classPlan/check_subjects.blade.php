@extends('officer.layout')
@section('content')
        <div class="container border border-1 justify-content-center">
            <div class="container p-3">
                @foreach ($system_request as $item)
                    <div class="row">
                        <div class="col-2 text-warning fw-bold">
                            <p>ขอยกเว้นรายวิชา :</p>
                        </div>
                        <div class="col-10">
                            <p>{{$item["system_name"]}}</p>
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
                    {{-- <div class="row">
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
                    </div> --}}
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
                    {{-- @foreach($type_transfer as $transfer)
                        <div class="row p-0">
                            <h5 class="text-darkblue" >{{ $transfer['type_transfer']}}</h5>
                            //<h5 class="text-darkblue" ><i class="bi bi-caret-right-fill">{{ $transfer['type_transfer']}}</h5>
                        </div>
                    @endforeach --}}
                    <div class="row p-0">
                        <h5 class="text-darkblue"><i class="bi bi-caret-right-fill"></i> {{ $type_transfer[0]['type_transfer']}}</h5>
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
                            @foreach ($subject_transfer as $item)
                                <tr>
                                    <td>{{$item["subject_code"]}}</td>
                                    <td>{{$item["subject_name"]}}</td>
                                    <td>{{$item["credit"]}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="container-form">
                        <div class="row p-0">
                            <h5 class="text-darkblue"><i class="bi bi-caret-right-fill"></i> {{ $type_transfer[3]['type_transfer']}}</h5>
                            {{-- <h5 class="text-darkblue" ><i class="bi bi-caret-right-fill">{{ $transfer['type_transfer']}}</h5> --}}
                        </div>
                    <table class="table border border-1">
                        <thead class="table bg-gold text-center">
                            <tr class="table-light">
                                <th colspan="4">ข้อมูลรหัสนักศึกษาเดิม</th>
                                <th colspan="3" class="border-start">ข้อมูลรหัสนักศึกษาปัจจุบัน</th>
                                <th colspan="4" class="border-start">ประเมิน</th>
                            </tr>
                            <tr>
                                <th>รหัสวิชา</th>
                                <th>ชื่อวิชา</th>
                                <th>หน่วยกิต</th>
                                <th class="border-end">เกรด</th>
                                <th>รหัสวิชา</th>
                                <th>ชื่อวิชา</th>
                                <th class="border-end">หน่วยกิต</th>
                                <th>อนุมัติ</th>
                                <th>ไม่อนุมัติ</th>
                                <th>ข้อเสนอแนะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($original_subjects as $item)
                                        <td>{{$item["subject_code"]}}</td>
                                        <td>{{$item["subject_name"]}}</td>
                                        <td>{{$item["credit"]}}</td>
                                        <td class="border-end">{{$item["grad"]}}</td>
                                @endforeach
                                @foreach ($current_subjects as $item)
                                        <td>{{$item["subject_code"]}}</td>
                                        <td>{{$item["subject_name"]}}</td>
                                        <td class="border-end">{{$item["credit"]}}</td>
                                @endforeach
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input single-checkbox" type="checkbox" value="1" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input single-checkbox" type="checkbox" value="2" required>
                                    </div>
                                </td>
                                
                                <td>
                                    <input type="text" class="form-control">
                                </td>
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
                                type="text" value="18" readonly style="max-width: 100px;">
                        </div>
                        <div class="col text-start fw-bold">
                            <p class="mb-0">หน่วยกิต</p>
                        </div>
                    </div>
                </div>

                <div class="container py-3 ">
                    <h6 class="fw-bold">ข้อเสนอแนะเพิ่มเติม</h6>
                    <textarea class="w-100 p-2" rows="4" name="comment" form="usrform"></textarea>
                </div>

                <div class="p-2 mt-3 mb-3 d-flex justify-content-between">
                    <a href="{{url('study_request')}}" class="btn btn outline-darkblue btn-lg " name="cancle">ยกเลิก</a>
                    <a href="{{url('result_check')}}" class="btn btn-darkblue btn-lg " name="submit">ยืนยัน</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        let checkboxes = document.querySelectorAll(".single-checkbox");

        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener("change", function() {
                checkboxes.forEach(cb => {
                    if (cb !== checkbox) cb.checked = false;
                });
            });
        });
    });
    </script>
@endsection
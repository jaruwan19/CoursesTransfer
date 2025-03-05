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
                    {{-- <div class="row">
                      <div class="col-2 text-warning fw-bold">
                          <p>วันที่สำเร็จการศึกษา :</p>
                      </div>
                      <div class="col-10">
                          <p>{{ session('requestTransfer.graduation_date') ?? 'ไม่มีข้อมูล' }}</p>
                      </div>
                  </div> --}}
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
                <hr>
            </div>

            <form action="{{ route('storeAddOriginalSubject') }}" method="POST">
                @csrf
                <!-- Input fields for subject information -->
                <div class="container-form">
                    <div class="row p-0">
                        <h5 class="form-header p-2">เพิ่มข้อมูลรายวิชาของรหัสนักศึกษาเดิม และ รหัสนักศึกษาปัจจุบัน</h5>
                    </div>
                    <!-- ฟอร์มการเพิ่มข้อมูลวิชาที่เรียน -->
                    <div class="container">
                        <!-- ข้อมูลรหัสนักศึกษาเดิม -->
                        <div class="row">
                            <div class="col p-0">
                                <table class="table mt-3 border border-1">
                                    <thead class="table-primary text-center">
                                        <tr class="table-light">
                                            <th colspan="4">ข้อมูลรหัสนักศึกษาเดิม</th>
                                        </tr>
                                        <tr class="text-start">
                                            <th>รหัสวิชา</th>
                                            <th>ชื่อวิชา</th>
                                            <th>หน่วยกิต</th>
                                            <th>เกรด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input name="original_subject_code" type="text" class="form-control"
                                                    required></td>
                                            <td><input name="original_subject_name" type="text" class="form-control"
                                                    required></td>
                                            <td><select name="original_count_unit" class="form-select" required>
                                                    <option value="" disabled selected hidden></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select></td>
                                            <td>
                                                <select name="original_grade" class="form-select" required>
                                                    <option value="" disabled selected hidden></option>
                                                    <option value="A">A</option>
                                                    <option value="Bp">B+</option>
                                                    <option value="B">B</option>
                                                    <option value="Cp">C+</option>
                                                    <option value="C">C</option>
                                                    <option value="Dp">D+</option>
                                                    <option value="D">D</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col p-0">
                                <table class="table mt-3 border border-1">
                                    <thead class="table-primary text-center">
                                        <tr class="table-light">
                                            <th colspan="4">ข้อมูลรหัสนักศึกษาปัจจุบัน</th>
                                        </tr>
                                        <tr class="text-start">
                                            <th>รหัสวิชา</th>
                                            <th>ชื่อวิชา</th>
                                            <th>หน่วยกิต</th>
                                            <th class="text-center">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input name="current_subject_code" type="text" class="form-control"
                                                    required></td>
                                            <td><input name="current_subject_name" type="text" class="form-control"
                                                    required></td>
                                            <td><select name="current_count_unit" class="form-select" required>
                                                    <option value="" disabled selected hidden></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select></td>

                                            <td class="d-flex justify-content-center">
                                                <input class="btn btn-success" type="submit" name="submit" value="เพิ่ม">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-2 mt-3 mb-3 d-flex justify-content-between">
                    <a href="#" onclick="history.back();" class="btn outline-darkblue btn-lg">ย้อนกลับ</a>
                    <button type="submit" class="btn btn-darkblue btn-lg">ถัดไป</button>
                </div>
            </form>
        </div>
    </div>
@endsection

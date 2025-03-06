@extends('layout')
@section('content')
    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">รหัสนักศึกษา :</h6>
            <h6>{{ $user['student_id'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>{{ $user['student_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
        <div>
            <h6 class="fw-bolder">สาขาวิชา :</h6>
            <h6>{{ $user['major_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
    </div>
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
            <form action="{{ route('confirmTransfer') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                        <div class="row">
                            <div class="col-2 text-warning fw-bold">
                                <p>วันที่สำเร็จการศึกษา :</p>
                            </div>
                            <div class="col-10">
                                <p>{{ session('requestTransfer.graduation_date') ?? 'ไม่มีข้อมูล' }}</p>
                            </div>
                        </div>
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

                <div class="container-form">
                    @if (session('requestTransfer.system_name') === 'ยกเว้นรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา จากมหาวิทยาลัยอื่น')
                        @if (session('addSubjectData'))
                            <div class="row p-0">
                                <h5 class="form-header p-2">ข้อมูลรายวิชาสถาบันเดิม และ มหาวิทยาลัยราชภัฏศรีสะเกษ</h5>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col p-0">
                                        <table class="table mt-3 border border-1">
                                            <thead class="table bg-gold text-center">
                                                <tr class="table-light">
                                                    <th colspan="4">ข้อมูลสถาบันเดิม</th>
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
                                                    <td>{{ session('addSubjectData')['original_subject_code'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addSubjectData')['original_subject_name'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addSubjectData')['original_count_unit'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addSubjectData')['original_grade'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col p-0">
                                        <table class="table mt-3 border border-1">
                                            <thead class="table bg-gold text-center">
                                                <tr class="table-light">
                                                    <th colspan="4">ข้อมูลมหาวิทยาลัยราชภัฏศรีสะเกษ</th>
                                                </tr>
                                                <tr class="text-start">
                                                    <th>รหัสวิชา</th>
                                                    <th>ชื่อวิชา</th>
                                                    <th>หน่วยกิต</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ session('addSubjectData')['original_subject_code'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addSubjectData')['original_subject_name'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addSubjectData')['original_count_unit'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p>ไม่มีข้อมูลที่กรอก</p>
                        @endif
                    @endif
                    @if (session('requestTransfer.system_name') ===
                            'เทียบโอนรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา ลาออก พ้นสภาพนักศึกษาจากมหาวิทยาลัยราชภัฏศรีสะเกษ')
                        @if (session('addOriginalSubjectData'))
                            <div class="row p-0">
                                <h5 class="form-header p-2">ข้อมูลรายวิชาของรหัสนักศึกษาเดิม และ รหัสนักศึกษาปัจจุบัน</h5>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col p-0">
                                        <table class="table mt-3 border border-1">
                                            <thead class="table bg-gold text-center">
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
                                                    <td>{{ session('addOriginalSubjectData')['original_subject_code'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addOriginalSubjectData')['original_subject_name'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addOriginalSubjectData')['original_count_unit'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addOriginalSubjectData')['original_grade'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col p-0">
                                        <table class="table mt-3 border border-1">
                                            <thead class="table bg-gold text-center">
                                                <tr class="table-light">
                                                    <th colspan="4">ข้อมูลรหัสนักศึกษาปัจจุบัน</th>
                                                </tr>
                                                <tr class="text-start">
                                                    <th>รหัสวิชา</th>
                                                    <th>ชื่อวิชา</th>
                                                    <th>หน่วยกิต</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ session('addOriginalSubjectData')['original_subject_code'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addOriginalSubjectData')['original_subject_name'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                    <td>{{ session('addOriginalSubjectData')['original_count_unit'] ?? 'ไม่มีข้อมูล' }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p>ไม่มีข้อมูลที่กรอก</p>
                        @endif
                    @endif
                </div>

                @if (in_array('ยกเว้นหมวดศึกษาทั่วไป 15 หน่วยกิต', session('requestTransfer.selected_exemptions', [])))
                    <div id="exempt1Table">
                        <h5 class="form-header-show mt-3">(1) ยกเว้นหมวดศึกษาทั่วไป 15 หน่วยกิต</h5>
                        <table class="table">
                            <thead class="table bg-gold">
                                <tr>
                                    <th>รหัสวิชา</th>
                                    <th>ชื่อวิชา</th>
                                    <th>หน่วยกิต</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exemptGeneralSubjects as $subject)
                                    <tr>
                                        <td>{{ $subject['subject_code'] }}</td>
                                        <td>{{ $subject['subject_name'] }}</td>
                                        <td>{{ $subject['credit'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                @if (in_array('ยกเว้นเลือกเสรี 6 หน่วยกิต', session('requestTransfer.selected_exemptions', [])))
                    <div id="exempt2Table">
                        <h5 class="form-header-show mt-3">(2) ยกเว้นเลือกเสรี 6 หน่วยกิต</h5>
                    </div>
                @endif

                @if (in_array(
                        'ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ',
                        session('requestTransfer.selected_exemptions', [])))
                    <div id="exempt3Table">
                        <h5 class="form-header-show mt-3">(3) ยกเว้นหมวดวิชาเฉพาะตามประกาศมหาวิทยาลัยราชภัฏศรีสะเกษ</h5>
                        <table class="table">
                            <thead class="table bg-gold">
                                <tr>
                                    <th>รหัสวิชา</th>
                                    <th>ชื่อวิชา</th>
                                    <th>หน่วยกิต</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exemptSpecificSubjects as $subject)
                                    <tr>
                                        <td>{{ $subject['subject_code'] }}</td>
                                        <td>{{ $subject['subject_name'] }}</td>
                                        <td>{{ $subject['credit'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                @if (in_array('ยกเว้นรายวิชาอื่น ๆ', session('requestTransfer.selected_exemptions', [])))
                    <div id="exempt4Table">
                        <div class="container-form">
                            <h5 class="form-header-show mt-3">(4) ยกเว้นรายวิชาอื่น ๆ</h5>
                            <div class="container">
                                <div class="row">
                                    <div class="col p-0">
                                        <table class="table mt-3 border border-1">
                                            <thead class="table bg-gold text-center">
                                                <tr class="table-light">
                                                    <th colspan="4">ข้อมูลสถาบันเดิม</th>
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
                                                    <td><input name="original_subject_code" type="text"
                                                            class="form-control" required></td>
                                                    <td><input name="original_subject_name" type="text"
                                                            class="form-control" required></td>
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
                                            <thead class="table bg-gold text-center">
                                                <tr class="table-light">
                                                    <th colspan="4">ข้อมูลมหาวิทยาลัยราชภัฏศรีสะเกษ</th>
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
                                                    <td><input name="current_subject_code" type="text"
                                                            class="form-control" required></td>
                                                    <td><input name="current_subject_name" type="text"
                                                            class="form-control" required></td>
                                                    <td><select name="current_count_unit" class="form-select" required>
                                                            <option value="" disabled selected hidden></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        </select></td>

                                                    <td class="d-flex justify-content-center">
                                                        <input class="btn btn-success" type="submit" name="submit"
                                                            value="เพิ่ม">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
        </div>

        <div class="container p-3 border rounded shadow-sm bg-light">
            <div class="row align-items-center text-darkblue fs-5">
                <div class="col text-end fw-bold">
                    <p class="mb-0">รวมหน่วยกิตที่ยกเว้นรายวิชา</p>
                </div>
                <div class="col-auto">
                    <input class="form-control text-center fw-bold border-0 bg-white shadow-sm px-3 fs-5" type="text"
                        value="15" readonly style="max-width: 100px;">
                </div>
                <div class="col text-start fw-bold">
                    <p class="mb-0">หน่วยกิต</p>
                </div>
            </div>
        </div>

        <div class="p-2 mt-3 mb-3 d-flex justify-content-between">
            <a href="#" onclick="history.back();" class="btn outline-darkblue btn-lg">ย้อนกลับ</a>
            {{-- <a href="{{ url('/statusRequest') }}" class="btn btn-darkblue btn-lg">ยืนยันการยกเว้นรายวิชา</a> --}}
            <button type="submit" class="btn btn-darkblue btn-lg">ยืนยันการยกเว้นรายวิชา</button>
        </div>
        </form>
    </div>
@endsection

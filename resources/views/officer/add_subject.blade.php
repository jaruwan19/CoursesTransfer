@extends('layout')
@section('content')
    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>{{ $user['officer_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
    </div>
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">เพิ่มรายวิชา</h4>
        <div class="container p-2 border border-1 justify-content-center">
            <form action="{{ route('add_subject.store') }}" class="form" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <label for="type">ประเภทการเทียบโอน/ยกเว้นรายวิชา</label>
                            <select class="form-select" name="exemption" id="exemption" width="100%" required>
                                <option selected disabled>เลือกประเภท</option>
                                <option value="ศึกษาทั่วไป 15 หน่วยกิต">หมวดศึกษาทั่วไป 15 หน่วยกิต</option>
                                <option value="หมวดวิชาเฉพาะ">หมวดวิชาเฉพาะ</option>
                                <option value="รายวิชาอื่นๆ">รายวิชาอื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-2" id="course-major-container" style="display: none;">
                        <div class="row">
                            <div class="col-6">
                                <label for="course_name">หลักสูตร</label>
                                <select class="form-select" name="course_name" width="100%" required>
                                    <option selected disabled>เลือกหลักสูตร</option>
                                    <option value="วิทยาศาสตรบัณฑิต">วิทยาศาสตรบัณฑิต</option>
                                    <option value="วิศวกรรมศาตรบัณฑิต">วิศวกรรมศาตรบัณฑิต</option>
                                    <option value="เทคโนโลยีบัณฑิต">เทคโนโลยีบัณฑิต</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="major_name">สาขา</label>
                                <select class="form-select" name="major_name" width="100%" required>
                                    <option selected disabled>เลือกสาขาวิชา</option>
                                    <option value="เทคโนโลยีคอมพิวเตอร์และดิจิทัล">เทคโนโลยีคอมพิวเตอร์และดิจิทัล</option>
                                    <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                                    <option value="เทคโนโลยีการจัดการอุตสาหกรรม">เทคโนโลยีการจัดการอุตสาหกรรม</option>
                                    <option value="ออกแบบผลิตภัณฑ์อุตสาหกรรม">ออกแบบผลิตภัณฑ์อุตสาหกรรม</option>
                                    <option value="วิศวกรรมโลจิสติกส์">วิศวกรรมโลจิสติกส์</option>
                                    <option value="วิศวกรรมซอฟต์แวร์">วิศวกรรมซอฟต์แวร์</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <table class="table mt-2 border border-1">
                    <thead class="table bg-gold">
                        <tr>
                            <th>รหัสวิชา</th>
                            <th>ชื่อวิชา </th>
                            <th>หน่วยกิต</th>
                            <th class="text-center">
                                <i class="bi bi-plus-circle"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="subject_code" width="100%" required>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="subject_name" width="100%" required>
                            </td>
                            <td>
                                <select name="credit" class="form-select" width="100%"required>
                                    <option value="" disabled selected hidden></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                </select>
                            </td>
                            <td class="text-center">
                                <i class="bi bi-check-circle text-success"></i>
                                <i class="bi bi-x-circle text-danger"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col text-center"> <!-- Use text-center to align the button -->
                        <input type="button" class="btn outline-darkblue" value="ยกเลิก">
                        <input type="button" class="btn btn-darkblue" value="ยืนยัน">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelectorAll('.nav-link').forEach(item => item.classList.remove('active'));
                link.classList.add('active');
            });
        });
        document.getElementById('exemption').addEventListener('change', function() {
            const courseMajorContainer = document.getElementById('course-major-container');
            if (this.value === 'หมวดวิชาเฉพาะ') {
                courseMajorContainer.style.display = 'block';
            } else {
                courseMajorContainer.style.display = 'none';
            }
        });
    </script>
@endsection

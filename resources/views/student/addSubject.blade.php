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
                        <span class="progress-label">เพิ่มข้อมูล</span>
                    </li>
                    <li class="step-wizard-item ">
                        <span class="progress-count">3</span>
                        <span class="progress-label">ยืนยันการยื่นคำร้อง</span>
                    </li>
                </ul>
            </section>
            <!-- Stepprogress -->
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
            <form action="" class="form" method="post">
                <div class="container-form ">
                    <div class="row p-0">
                        <h5 class="form-header p-2" >กรอกข้อมูลสถาบันเดิม และ ข้อมูลมหาวิทยาลัยราชภัฏศรีสะเกษ </h5>
                    </div>
                    <!-- <a href="checkData.html" class="btn btn-warning fw-bold p-2 mt-2" name="add">เพิ่มรายวิชา</a> -->
                    <div class="container">
                        <div class="row">
                            <div class="col p-1">
                                <table class="table mt-3 border border-1">
                                    <thead class="table-primary text-center">
                                        <tr class="table-light">
                                            <th colspan="4">สถาบันการศึกษาเดิม</th>
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
                                          <td>
                                            <input name="course_code" type="text" class="form-control" required>
                                          </td>
                                          <td>
                                            <input name="subject_name" type="text" class="form-control" required>
                                          </td>
                                          <td>
                                            <select name="count_unit" class="form-control"  width="100%"required>
                                                <option value="" disabled selected hidden></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="2">3</option>
                                            </select>
                                          </td>
                                          <td>
                                            <select name="grade" class="form-control"  width="100%"required>
                                                <option value="" disabled selected hidden></option>
                                                <option value="A">4</option>
                                                <option value="Bp">3.5</option>
                                                <option value="B">3</option>
                                                <option value="Cp">2.5</option>
                                            </select>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>4123315</td>
                                          <td>การบริหารโครงการซอฟต์แวร์</td>
                                          <td>3</td>
                                          <td>2.5</td>
                                        </tr>
                                      </tbody>
                                </table>
                            </div>
                            <div class="col p-1">
                                <table class="table mt-3 border border-1">
                                    <thead class="table-primary text-center">
                                        <tr class="table-light">
                                            <th colspan="4">มหาวิทยาลัยราชภัฏศรีสะเกษ</th>
                                        </tr>
                                        <tr class="text-start">
                                          <th>รหัสวิชา</th>
                                          <th>ชื่อวิชา</th>
                                          <th>หน่วยกิต</th>
                                          <th>
                                            <i class="bi bi-three-dots-vertical"></i>
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            <select name="course_code" class="form-control"  width="100%" required>
                                                <option value="" disabled selected hidden></option>
                                                <option value="4123315">4123315</option>
                                                <option value="4123315">4123315</option>
                                                <option value="4123315">4123315</option>
                                            </select>
                                          </td>
                                          <td>
                                            <select name="subject_name" class="form-control"  width="100%"required>
                                                <option value="" disabled selected hidden></option>
                                                <option value="การบริหารโครงการซอฟต์แวร์">การบริหารโครงการซอฟต์แวร์</option>
                                                <option value="การบริหารโครงการซอฟต์แวร์">การบริหารโครงการซอฟต์แวร์</option>
                                                <option value="การบริหารโครงการซอฟต์แวร์">การบริหารโครงการซอฟต์แวร์</option>
                                            </select>
                                          </td>
                                          <td>
                                            <select name="count_unit" class="form-control"  width="100%"required>
                                                <option value="" disabled selected hidden></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="2">3</option>
                                            </select>
                                          </td>
                                          <td class="d-flex justify-content-center">
                                            <input class="btn btn-success" type="submit" name="submit"  value="เพิ่ม" >
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>4123315</td>
                                          <td>การบริหารโครงการซอฟต์แวร์</td>
                                          <td>3</td>
                                          <td class="text-center">
                                            <i class="bi bi-pencil-square text-warning"></i>
                                            <i class="bi bi-trash-fill text-danger"></i>
                                          </td>
                                        </tr>
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-2 mt-3 mb-3 d-flex justify-content-between">
                    <a href="{{url('/typeTransfer')}}" class="btn btn outline-darkblue btn-lg " name="cancle">ยกเลิก</a>
                    <a href="{{url('/checkData')}}" class="btn btn-darkblue btn-lg " name="submit">ยืนยัน</a>
                </div>
            </form>
        </div>
    </div>
@endsection
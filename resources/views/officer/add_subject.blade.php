@extends('officer.layout')
@section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">เพิ่มรายวิชา</h4>
        <div class="container p-2 border border-1 justify-content-center">
            <form action="" class="form" method="post">
                <div class="container">
                    <label for="type">ประเภท</label>
                    <select name="type_course" class="form-control w-25" width="100%"required>
                        <option value="" disabled selected hidden></option>
                        <option value="ศึกษาทั่วไป 24 หน่วยกิต">ศึกษาทั่วไป 24 หน่วยกิต</option>
                        <option value="ศึกษาทั่วไป 15 หน่วยกิต">ศึกษาทั่วไป 15 หน่วยกิต</option>
                        <option value="หมวดวิชาเฉพาะ">หมวดวิชาเฉพาะ</option>
                    </select>
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
                            <td class="text-center">
                                <i class="bi bi-check-circle text-success"></i>
                                <i class="bi bi-x-circle text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>4123315</td>
                            <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                            <td>3</td>
                            <td class="text-center">
                                <i class="bi bi-pencil-square text-warning"></i>
                                <i class="bi bi-trash-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>4123315</td>
                            <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                            <td>3</td>
                            <td class="text-center">
                                <i class="bi bi-pencil-square text-warning"></i>
                                <i class="bi bi-trash-fill text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>4123315</td>
                            <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                            <td>3</td>
                            <td class="text-center">
                                <i class="bi bi-pencil-square text-warning"></i>
                                <i class="bi bi-trash-fill text-danger"></i>
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

<!-- Custom JavaScript -->
<script>
  // Add event listener to each tab link
  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
      // Remove 'active' class from all links
      document.querySelectorAll('.nav-link').forEach(item => item.classList.remove('active'));
      // Add 'active' class to the clicked link
      link.classList.add('active');
    });
  });
</script>
@endsection
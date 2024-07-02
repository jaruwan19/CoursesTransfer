@extends('student.layout')
@section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <h2 class="header">คำร้องของนักศึกษา</h2>
        <div class="container p-0 border border-1 justify-content-center">
            <form action="" class="form" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col p-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-fill " id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active fw-bold text-warning" id="tab1-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                        รอการตรวจสอบ
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link  fw-bold text-warning" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                                        type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                        ตรวจสอบแล้ว
                                    </button>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content  p-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                    aria-labelledby="tab1-tab">
                                    <!-- Table for Tab 1 -->
                                    <table class="table mt-2 border border-1">
                                        <thead class="table bg-gold text-center">
                                            <tr>
                                                <th>รหัสนักศึกษา</th>
                                                <th>ชื่อ-นามสกุล</th>
                                                <th>สาขาวิชา</th>
                                                <th>ไฟล์ทรานสคริป</th>
                                                <th>ตรวจสอบรายวิชา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>6410014101</td>
                                                <td>จารุวรรณ ปกป้อง</td>
                                                <td>วิศวกรรมซอฟต์แวร์</td>
                                                <td class="text-center">
                                                    <a href="#">เปิด</a>
                                                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="check_subjects.html"
                                                        class="btn btn-sm outline-darkblue rounded-pill w-50">ตรวจสอบ
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                    <!-- Table for Tab 2 -->
                                    <table class="table mt-2 border border-1">
                                        <thead class="table bg-gold text-center">
                                            <tr>
                                                <th>รหัสนักศึกษา</th>
                                                <th>ชื่อ-นามสกุล</th>
                                                <th>สาขาวิชา</th>
                                                <th>ไฟล์ทรานสคริป</th>
                                                <th>ตรวจสอบรายวิชา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>6410014101</td>
                                                <td>จารุวรรณ ปกป้อง</td>
                                                <td>วิศวกรรมซอฟต์แวร์</td>
                                                <td class="text-center">
                                                    <a href="#">เปิด</a>
                                                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="data_preview.html"
                                                        class="btn btn-sm outline-darkblue rounded-pill w-50">ดูข้อมูล</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
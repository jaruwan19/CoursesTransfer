@extends('officer.layout')
@section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">คำร้องของนักศึกษา</h4>
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
                                        รอดำเนินการ
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link  fw-bold text-warning" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                                        type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                        ไม่เห็นชอบ
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link  fw-bold text-warning" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                                        type="button" role="tab" aria-controls="tab3" aria-selected="false">
                                        เห็นชอบ
                                    </button>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content  p-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                    aria-labelledby="tab1-tab">
                                    <!-- Table for Tab 1 -->
                                    <table class="table mt-2 border border-1">
                                        <thead class="table bg-gold">
                                            <tr>
                                                <th>รหัสนักศึกษา</th>
                                                <th>ชื่อ-นามสกุล</th>
                                                <th>ไฟล์ทรานสคริป</th>
                                                <th>ข้อมูลคำร้อง</th>
                                                <th>เห็นชอบ</th>
                                                <th>ไม่เห็นชอบ</th>
                                                <!-- <th>ข้อเสนอแนะ</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>6410014101</td>
                                                <td>จารุวรรณ ปกป้อง</td>
                                                <td>
                                                    <a href="#">เปิด</a>
                                                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{url('/adv_data_preview')}}">เปิด</a>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        </label>
                                                    </div>
                                                </td>
                                                <!-- <td>
                                                    <input type="text" class="form-control">
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td>6410014101</td>
                                                <td>จารุวรรณ ปกป้อง</td>
                                                <td>
                                                    <a href="#">เปิด</a>
                                                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{url('/adv_data_preview')}}">เปิด</a>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        </label>
                                                    </div>
                                                </td>
                                                <!-- <td>
                                                    <input type="text" class="form-control">
                                                </td> -->
                                            </tr>
                                            <tr>
                                                <td>6410014101</td>
                                                <td>จารุวรรณ ปกป้อง</td>
                                                <td>
                                                    <a href="#">เปิด</a>
                                                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{url('/adv_data_preview')}}">เปิด</a>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                        </label>
                                                    </div>
                                                </td>
                                                <!-- <td>
                                                    <input type="text" class="form-control">
                                                </td> -->
                                            </tr>
                                            <tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col text-center"> <!-- Use text-center to align the button -->
                                          <input type="button" class="btn btn-success" value="ยืนยัน">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                    <!-- Table for Tab 2 -->
                                    <table class="table mt-2 border border-1">
                                        <thead class="table bg-gold text-center">
                                            <tr>
                                                <th>รหัสนักศึกษา</th>
                                                <th>ชื่อ-นามสกุล</th>
                                                <th>ไฟล์ทรานสคริป</th>
                                                <th>ข้อมูลคำร้อง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>6410014101</td>
                                                <td>จารุวรรณ ปกป้อง</td>
                                                <td>
                                                    <a href="#">เปิด</a>
                                                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{url('/adv_data_preview')}}">เปิด</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6410014101</td>
                                                <td>จารุวรรณ ปกป้อง</td>
                                                <td>
                                                    <a href="#">เปิด</a>
                                                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{url('/adv_data_preview')}}">เปิด</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                    <!-- Table for Tab 2 -->
                                    <table class="table mt-2 border border-1">
                                        <thead class="table bg-gold text-center">
                                            <tr>
                                                <th>รหัสนักศึกษา</th>
                                                <th>ชื่อ-นามสกุล</th>
                                                <th>ไฟล์ทรานสคริป</th>
                                                <th>ข้อมูลคำร้อง</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>6410014101</td>
                                                <td>จารุวรรณ ปกป้อง</td>
                                                <td class="text-center">
                                                    <a href="#">เปิด</a>
                                                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#">เปิด</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6410014101</td>
                                                <td>จารุวรรณ ปกป้อง</td>
                                                <td class="text-center">
                                                    <a href="#">เปิด</a>
                                                    <a href="#"><i class="bi-file-pdf text-danger"></i></a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#">เปิด</a>
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
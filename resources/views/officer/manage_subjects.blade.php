@extends('officer.layout')
@section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">จัดการรายวิชา</h4>
        <a href="{{url('add_subject')}}" class="btn outline-darkblue mt-1 my-3">เพิ่มรายวิชา</a>
        <div class="container p-0 border border-1 justify-content-center">
            <form action="" class="form" method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col p-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-fill border border-warning" id="myTab" role="tablist">
                                <li class="nav-item " role="presentation">
                                    <button class="nav-link active fw-bold text-dark" id="tab1-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                        หมวดศึกษาทั่วไป 24 หน่วยกิต
                                    </button>
                                </li>
                                <li class="nav-item border border-warning" role="presentation">
                                    <button class="nav-link  fw-bold text-dark" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                                        type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                        หมวดศึกษาทั่วไป 15 หน่วยกิต
                                    </button>
                                </li>
                                <li class="nav-item border border-warning" role="presentation">
                                    <button class="nav-link  fw-bold text-dark" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                                        type="button" role="tab" aria-controls="tab3" aria-selected="false">
                                        หมวดวิชาเฉพาะ
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
                                                <th>รหัสวิชา</th>
                                                <th>ชื่อวิชา </th>
                                                <th>หน่วยกิต</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>4123315</td>
                                                <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>4123315</td>
                                                <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>4123315</td>
                                                <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                                                <td>3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                    <!-- Table for Tab 2 -->
                                    <table class="table mt-2 border border-1">
                                        <thead class="table bg-gold">
                                            <tr>
                                                <th>รหัสวิชา</th>
                                                <th>ชื่อวิชา </th>
                                                <th>หน่วยกิต</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>4123315</td>
                                                <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>4123315</td>
                                                <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>4123315</td>
                                                <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                                                <td>3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                    <!-- Table for Tab 2 -->
                                    <table class="table mt-2 border border-1">
                                        <thead class="table bg-gold">
                                            <tr>
                                                <th>หลักสูตร</th>
                                                <th>สาขา </th>
                                                <th>รหัสวิชา</th>
                                                <th>ชื่อวิชา </th>
                                                <th>หน่วยกิต </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>วิศวกรรมศาตรบัณฑิต</td>
                                                <td>วิศวกรรมซอฟต์แวร์</td>
                                                <td>4123315</td>
                                                <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>วิศวกรรมศาตรบัณฑิต</td>
                                                <td>วิศวกรรมซอฟต์แวร์</td>
                                                <td>4123315</td>
                                                <td>การบริหารจัดการโครงการซอฟต์แวร์</td>
                                                <td>3</td>
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
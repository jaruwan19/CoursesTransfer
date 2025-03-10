@extends('layout')
@section('content')
    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>{{ $user['officer_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
    </div>
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">จัดการรายวิชา</h4>
        <a href="{{ url('add_subject') }}" class="btn outline-darkblue mt-1 my-3">เพิ่มรายวิชา</a>
        <div class="container p-0 border border-1 justify-content-center">

            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-fill border border-warning" id="myTab" role="tablist">
                            <li class="nav-item " role="presentation">
                                <button class="nav-link active fw-bold text-dark" id="tab1-tab" data-bs-toggle="tab"
                                    data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1"
                                    aria-selected="true">
                                    หมวดศึกษาทั่วไป 15 หน่วยกิต
                                </button>
                            </li>
                            <li class="nav-item border border-warning" role="presentation">
                                <button class="nav-link  fw-bold text-dark" id="tab2-tab" data-bs-toggle="tab"
                                    data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2"
                                    aria-selected="false">
                                    หมวดวิชาเฉพาะ
                                </button>
                            </li>
                            <li class="nav-item border border-warning" role="presentation">
                                <button class="nav-link  fw-bold text-dark" id="tab3-tab" data-bs-toggle="tab"
                                    data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3"
                                    aria-selected="false">
                                    รายวิชาอื่นๆ
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
                                        @foreach ($generalSubjects as $subject)
                                            <tr>
                                                <td>{{ $subject['subject_code'] }}</td>
                                                <td>{{ $subject['subject_name'] }}</td>
                                                <td>{{ $subject['credit'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
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
                                        @foreach ($specificSubjects as $subject)
                                            <tr>
                                                <td>{{ $subject['courses'] }}</td>
                                                <td>{{ $subject['major_name'] }}</td>
                                                <td>{{ $subject['subject_code'] }}</td>
                                                <td>{{ $subject['subject_name'] }}</td>
                                                <td>{{ $subject['credit'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
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
                                        @foreach ($otherSubjects as $subject)
                                            <tr>
                                                <td>{{ $subject['subject_code'] }}</td>
                                                <td>{{ $subject['subject_name'] }}</td>
                                                <td>{{ $subject['credit'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </script>
@endsection

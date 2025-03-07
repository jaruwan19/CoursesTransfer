@extends('layout')
@section('content')
    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>{{ $user['officer_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
    </div>
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">อัปเดตการชำระเงิน</h4>
        <div class="container p-0 border border-1 justify-content-center">
            <form action="" class="form" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col p-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-fill " id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active fw-bold text-warning" id="tab1-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1"
                                        aria-selected="true">
                                        รอดำเนินการ
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link  fw-bold text-warning" id="tab2-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2"
                                        aria-selected="false">
                                        อัปเดตแล้ว
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
                                                <th>สาขาวิชา</th>
                                                <th>ข้อมูลคำร้อง</th>
                                                <th>หลักฐานการชำระเงิน</th>
                                                <th>อัปเดต</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($student_requests as $item)
                                                <tr>
                                                    <td>{{ $item['student_id'] }}</td>
                                                    <td>{{ $item['student_name'] }}</td>
                                                    <td>{{ $item['major_name'] }}</td>
                                                    <td>
                                                        <a href="{{ url('data_preview') }}"
                                                            class="btn btn-sm outline-darkblue rounded-pill w-50">ดูข้อมูล</a>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-sm outline-darkblue rounded-pill w-50"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#uploadEvidenceModal">ดูหลักฐาน
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="btn btn-sm btn-darkblue rounded-pill w-75">อัปเดต</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal fade" id="uploadEvidenceModal" tabindex="-1"
                                        aria-labelledby="uploadEvidenceModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="uploadEvidenceModalLabel">
                                                        ข้อมูลหลักฐานการชำระเงิน</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label for="evidencePaymentDate" class="form-label fw-bold">วันที่ชำระเงิน :</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <span id="evidencePaymentDateDisplay">{{ $evidencePayment['payment_date'] }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label for="evidencePaymentTime" class="form-label fw-bold">เวลา :</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <span id="evidencePaymentTimeDisplay">{{ $evidencePayment['payment_time'] }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <label for="evidenceImage" class="form-label fw-bold">หลักฐานการชำระเงิน :</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <div class="evidence-upload-container">
                                                                    <div id="imagePreview" style="display: block;">
                                                                        <img id="previewImage" src="{{ $evidencePayment['evidence_file_path'] }}"
                                                                            alt="Image Preview"
                                                                            style="max-width: 100%; max-height: 200px; display: block; margin: 0 auto;">
                                                                    </div>
                                                                    <span id="evidenceImageDisplay">{{ $evidencePayment['evidence_file_name'] }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-darkblue me-2"
                                                            data-bs-dismiss="modal">ปิด</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                    <!-- Table for Tab 2 -->
                                    <table class="table mt-2 border border-1">
                                        <thead class="table bg-gold">
                                            <tr>
                                                <th>รหัสนักศึกษา</th>
                                                <th>ชื่อ-นามสกุล</th>
                                                <th>สาขาวิชา</th>
                                                <th>ข้อมูลคำร้อง</th>
                                                <th>หลักฐานการชำระเงิน</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($student_requests as $item)
                                                <tr>
                                                    <td>{{ $item['student_id'] }}</td>
                                                    <td>{{ $item['student_name'] }}</td>
                                                    <td>{{ $item['major_name'] }}</td>
                                                    <td>
                                                        <a href="{{ url('data_preview') }}"
                                                            class="btn btn-sm outline-darkblue rounded-pill w-50">ดูข้อมูล</a>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="btn btn-sm outline-darkblue rounded-pill w-50">ดูข้อมูล</a>
                                                    </td>
                                                </tr>
                                            @endforeach
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

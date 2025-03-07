@extends('layout')
@section('content')
    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>{{ $user['officer_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
    </div>

    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">ค้นหาคำร้อง</h4>
        <div class="search-requests-container">
            <table id="searchRequestsTable" class="search-requests-table table table-striped">
                <thead class="table bg-gold">
                    <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>สาขา</th>
                        <th>สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($search_requests as $request)
                        <tr>
                            <td>{{ $request['student_id'] }}</td>
                            <td>{{ $request['student_name'] }}</td>
                            <td>{{ $request['major_name'] }}</td>
                            <td>
                                <span class="search-requests-status-{{ $request['status'] }}">
                                    {{ $request['status'] == 'approved' ? 'คำร้องอนุมัติ' : ($request['status'] == 'pending' ? 'กำลังดำเนินการ' : 'ส่งกลับแก้ไข') }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#searchRequestsTable').DataTable({
                paging: true, 
                searching: true,
                info: true, 
                responsive: true, 
            });
        });
    </script>
@endsection

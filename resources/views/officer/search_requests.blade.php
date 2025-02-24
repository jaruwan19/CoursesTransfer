@extends('officer.layout')
@section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">ค้นหาคำร้อง</h4>

        <div class="search-requests-container">
            <div class="search-requests-header">
                <div class="search-requests-filter-bar">
                    <label for="show">แสดง</label>
                    <select id="show">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                    <label for="branch">รายการ</label>
                    <select id="branch">
                        <option value="">สาขา</option>
                        <option value="software">วิศวกรรมซอฟต์แวร์</option>
                        <option value="computer">วิศวกรรมคอมพิวเตอร์</option>
                    </select>
                    <input type="text" placeholder="ค้นหา...">
                    <button>ค้นหา</button>
                </div>
            </div>

            <table class="search-requests-table">
                <thead>
                    <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>สาขา</th>
                        <th>สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>6410014101</td>
                        <td>XXXXX XXXXX</td>
                        <td>วิศวกรรมซอฟต์แวร์</td>
                        <td><span class="search-requests-status-approved">คำร้องอนุมัติ</span></td>
                    </tr>
                    <tr>
                        <td>6410014102</td>
                        <td>XXXXX XXXXX</td>
                        <td>วิศวกรรมซอฟต์แวร์</td>
                        <td><span class="search-requests-status-pending">กำลังดำเนินการ</span></td>
                    </tr>
                    <tr>
                        <td>6410014103</td>
                        <td>XXXXX XXXXX</td>
                        <td>วิศวกรรมซอฟต์แวร์</td>
                        <td><span class="search-requests-status-rejected">ไม่อนุมัติ</span></td>
                    </tr>
                </tbody>
            </table>

            <div class="search-requests-pagination">
                <a href="#">ก่อนหน้า</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">ต่อไป</a>
            </div>
        </div>
    </div>
@endsection

    @extends('student.layout')
    @section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <!-- Stepprogress -->
        <div>
            <section class="step-wizard">
                <ul class="step-wizard-list">
                    <li class="step-wizard-item current-item">
                        <span class="progress-count">1</span>
                        <span class="progress-label">เลือกระบบเทียนโอนรายวิชา</span>
                    </li>
                    <li class="step-wizard-item ">
                        <span class="progress-count">2</span>
                        <span class="progress-label">เลือกประเภทการเทียบโอน</span>
                    </li>
                    <li class="step-wizard-item ">
                        <span class="progress-count">3</span>
                        <span class="progress-label">ยืนยันการยื่นคำร้อง</span>
                    </li>
                </ul>
            </section>
            <!-- Stepprogress -->

        <h4 class="header">ยื่นคำร้อง</h4>
        <div class="container border border-1 justify-content-center">
            <form action="" class="form"  method="post">
                @csrf
                <!-- เลือกระบบเทียบโอน -->
                <div class="container-form">
                    <div class="row p-0">
                        <h5 class="form-header p-2 ">เลือกระบบเทียบโอน/ยกเว้นรายวิชา</h5>
                    </div>
                    <div class="form-check m-2">
                        <input type="radio" class="form-check-input" id="radio1" name="syst_name" value="syst_name1" onchange="toggleSections()">
                        <label class="form-check-label" for="radio1">ยกเว้นรายวิชา สำหรับนักศึกษาที่สำเร็จการศึกษาระดับ ปวส.</label>
                    </div>
                    <div class="form-check m-2">
                        <input type="radio" class="form-check-input" id="radio2" name="syst_name" value="syst_name2" onchange="toggleSections()">
                        <label class="form-check-label" for="radio2">ยกเว้นรายวิชา สำหรับนักศึกษาที่สำเร็จการศึกษาระดับปริญญาตรี</label>
                    </div>
                    <div class="form-check m-2">
                        <input type="radio" class="form-check-input" id="radio3" name="syst_name" value="syst_name3" onchange="toggleSections()">
                        <label class="form-check-label">ยกเว้นรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา จากมหาวิทยาลัยอื่น</label>
                    </div>
                    <div class="form-check m-2">
                        <input type="radio" class="form-check-input" id="radio4" name="syst_name" value="syst_name4" onchange="toggleSections()">
                        <label class="form-check-label">เทียบโอนรายวิชา สำหรับนักศึกษาที่ยังไม่สำเร็จการศึกษา ลาออก พ้นสภาพนักศึกษาจากมหาวิทยาลัยราชภัฏศรีสะเกษ</label>
                    </div>
                </div>
                
                <!-- สถาบันการศึกษาส่วนนี้จะไม่แสดงในตัวเลือกที่ 4 -->
                <div id="institution-section" class="container-form mt-3">
                    <div class="row p-0">
                        <h5 class="form-header p-2" >เลือกสถาบันการศึกษา</h5>
                    </div>
                    <div class="m-2">
                        <select class="form-select" aria-label="Default select example" name="institution">
                            <option selected disabled hidden>เลือกสถาบันการศึกษา</option>
                            <option value="วิทยาลัยเทคนิคศรีสะเกษ">วิทยาลัยเทคนิคศรีสะเกษ</option>
                            <option value="วิทยาลัยเทคนิคยโสธร">วิทยาลัยเทคนิคยโสธร</option>
                            <option value="วิทยาลัยเทคนิคอุบลราชธานี">วิทยาลัยเทคนิคอุบลราชธานี</option>
                        </select>
                    </div>
                </div>

                <div id="graduation-date-section" class="container-form mt-3">
                    <div class="row p-0">
                        <h5 class="form-header p-2" >วันที่สำเร็จการศึกษา</h5>
                    </div>
                    <div class="m-2">
                        <input type="date" class="form-control" id="datepicker" name="datepicker">
                    </div>
                </div>

                <!-- Additional Info (Hidden by Default) -->
                <div id="additional-info-section" class="container-form mt-3" style="display: none;">
                    <div class="row p-0">
                        <h5 class="form-header p-2" >เพิ่มข้อมูล รหัสนักศึกษาเดิม และสาขาวิชาเดิม</h5>
                    </div>
                    <div class="mb-2">
                        <label for="original_student_id" class="form-label fw-bold">รหัสนักศึกษาเดิม</label>
                        <input type="text" class="form-control" id="original_student_id" name="original_student_id" placeholder="รหัสนักศึกษาเดิม">
                    </div>
                    <div class="mb-2">
                        <label for="major_original" class="form-label fw-bold">สาขาวิชาเดิม</label>
                        <select class="form-select" id="major_original" name="major_original">
                            <option selected disabled>เลือกสาขาวิชาเดิม</option>
                            <option value="computer_science">วิทยาการคอมพิวเตอร์</option>
                            <option value="software_engineering">วิศวกรรมซอฟต์แวร์</option>
                        </select>
                    </div>
                </div>
                <div class="container-form mt-3">
                    <div class="row p-0">
                        <h5 class="form-header p-2">อัปโหลดใบรายงานผลการเรียน</h5>
                    </div>
                    <div class="container-dotted p-3 mt-2" >
                        <div class="input-group ">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                    </div>
                </div>
                <div class="p-2 mt-3 d-flex justify-content-end">
                    
                    <a href="{{url('/typeTransfer')}}" class="btn btn-darkblue btn-lg " name="submit">ยืนยัน</a>
                </div>
            </form>
        </div>
    </div>
    <script>
        function toggleSections() {
        // Get selected radio value
        const selectedOption = document.querySelector('input[name="syst_name"]:checked').value;
        
        // Show/Hide sections based on selected option
        if (selectedOption === "syst_name4") {
            document.getElementById('additional-info-section').style.display = 'block'; // Show additional info section
            document.getElementById('institution-section').style.display = 'none'; // Hide institution section
            document.getElementById('graduation-date-section').style.display = 'none'; // Hide graduation date section
        } else {
            document.getElementById('additional-info-section').style.display = 'none'; // Hide additional info section
            document.getElementById('institution-section').style.display = 'block'; // Show institution section
            document.getElementById('graduation-date-section').style.display = 'block'; // Show graduation date section
        }

        if (selectedOption === "syst_name3") {
            document.getElementById('graduation-date-section').style.display = 'none'; // Hide graduation date section
        }

    }
    </script>
    
@endsection

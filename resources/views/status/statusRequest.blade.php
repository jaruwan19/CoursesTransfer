@extends('layout')
@section('content')
    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">รหัสนักศึกษา :</h6>
            <h6>{{ $user['student_id'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>{{ $user['student_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
        <div>
            <h6 class="fw-bolder">สาขาวิชา :</h6>
            <h6>{{ $user['major_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
    </div>
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">สถานะคำร้อง</h4>
        <div class="container border border-1 justify-content-center">
            <div class="container p-3">
                <div class="row">
                    <div class="col fw-bold text-end">
                        <p>สถานะปัจจุบัน :</p>
                    </div>
                    <div class="col fw-bold text-success" id="currentStatus">
                        <p>รอการตรวจสอบรายวิชา</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col fw-bold text-end">
                        <p>ขั้นตอนถัดไป :</p>
                    </div>
                    <div class="col fw-bold text-darkblue" id="nextStep">
                        <p>รอการตรวจสอบรายวิชา</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div id="editRequestButton" style="display: none;">
                            <button type="submit" class="btn btn-darkblue" onclick="goToEditPage()">แก้ไขคำร้อง</button>
                        </div>
                        <div id="copyLinkButton" style="display: none;">
                            <button type="submit" class="btn btn-darkblue" onclick="copyLink()">คัดลอกลิงก์</button>
                        </div>
                        <div class="step-buttons" id="stepButtons" style="display: none;">
                            <button type="button" class="btn btn-darkblue"
                                onclick="printPaymentSlip()">พิมพ์ใบชำระ</button>
                            <button type="button" class="btn btn-darkblue" data-bs-toggle="modal"
                                data-bs-target="#uploadEvidenceModal">แนบหลักฐาน</button>
                        </div>
                        <div id="printRequestButton" style="display: none;">
                            <button type="button" class="btn btn-darkblue" onclick="printRequest()">พิมพ์ใบคำร้อง</button>
                        </div>
                        <div id="printEvidenceButton" style="display: none;">
                            <button type="button" class="btn btn-darkblue"
                                onclick="printEvidence()">พิมพ์หลักฐานคำร้อง</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div>
                    <div class="step-status">
                        <div class="step-container" id="stepContainer">
                            <div class="step" data-step="1">
                                <div class="circle"></div>
                                <div class="text">ตรวจสอบรายวิชา</div>
                            </div>
                            <div class="step" data-step="2">
                                <div class="circle"></div>
                                <div class="text">ขอความเห็นของ/อนุมัติจากอาจารย์ที่ปรึกษา ให้คัดลอก Link
                                    ส่งให้อาจารย์ที่ปรึกษาเห็นชอบ</div>
                            </div>
                            <div class="step" data-step="3">
                                <div class="circle"></div>
                                <div class="text">ขอความเห็นชอบคณบดี ให้พิมพ์ใบคำร้องเสนอคณบดีให้ความเห็นชอบ</div>
                            </div>
                            <div class="step" data-step="4">
                                <div class="circle"></div>
                                <div class="text">นำส่งเอกสารที่งานทะเบียน</div>
                            </div>
                            <div class="step" data-step="5">
                                <div class="circle"></div>
                                <div class="text">พิมพ์ใบคำร้องเพื่อชำระค่าธรรมเนียมยกเว้นรายวิชาที่งานคลัง</div>
                            </div>
                            <div class="step" data-step="6">
                                <div class="circle"></div>
                                <div class="text">คำร้องขออนุมัติ ให้พิมพ์คำร้องเพื่อเป็นหลักฐาน</div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-darkblue" onclick="updateStep()">อัพเดท Step</button>
                    <button type="button" class="btn btn-secondary" id="planCheckButton"
                        onclick="planCheck()">งานแผนการเรียนตรวจสอบ</button>
                    <script>
                        let currentStep = 1;
                        let planCheckMode = false;
                        const statusMessages = [
                            "ตรวจสอบรายวิชาเรียบร้อยแล้ว",
                            "อาจารย์ที่ปรึกษาเห็นชอบแล้ว",
                            "คณบดีเห็นชอบแล้ว",
                            "นำส่งเอกสารที่งานทะเบียนเรียบร้อย",
                            "ชำระค่าธรรมเนียมเรียบร้อย",
                            "อนุมัติคำร้องเรียบร้อย"
                        ];
                        const nextStepMessages = [
                            "คัดลอก link ส่งให้อาจารย์ที่ปรึกษาเห็นชอบ",
                            "พิมพ์ใบคำร้องเสนอคณบดีให้ความเห็นชอบ",
                            "นำส่งเอกสารที่งานทะเบียน",
                            "พิมพ์ใบคำร้องเพื่อชำระค่าธรรมเนียมยกเว้นรายวิชาที่งานคลัง",
                            "พิมพ์คำร้องเพื่อเป็นหลักฐาน",
                            "เสร็จสิ้น"
                        ];

                        function updateStep() {
                            if (planCheckMode) {
                                planCheck(); // เรียกใช้ planCheck() เพื่อรีเซ็ตสถานะ
                            }
                            const stepContainer = document.getElementById("stepContainer");
                            const steps = stepContainer.querySelectorAll(".step");
                            const stepButtons = document.getElementById("stepButtons");
                            const copyLinkButton = document.getElementById("copyLinkButton");
                            const printRequestButton = document.getElementById("printRequestButton");
                            const printEvidenceButton = document.getElementById("printEvidenceButton");
                            const currentStatusElement = document.getElementById("currentStatus");
                            const nextStepElement = document.getElementById("nextStep");
                            const planCheckButton = document.getElementById("planCheckButton");

                            if (currentStep <= steps.length) {
                                const currentStepElement = steps[currentStep - 1];
                                const currentCircle = currentStepElement.querySelector('.circle');
                                const currentText = currentStepElement.querySelector('.text');
                                currentCircle.classList.add("completed");
                                currentCircle.innerHTML = "&#10004;";
                                currentStepElement.classList.add("completed");
                                currentText.classList.add("completed");

                                currentStatusElement.querySelector("p").textContent = statusMessages[currentStep - 1];
                                nextStepElement.querySelector("p").textContent = nextStepMessages[currentStep - 1];

                                if (currentStep === 1) {
                                    copyLinkButton.style.display = 'block';
                                } else {
                                    copyLinkButton.style.display = 'none';
                                }

                                if (currentStep === 4) {
                                    stepButtons.style.display = 'block';
                                } else {
                                    stepButtons.style.display = 'none';
                                }

                                if (currentStep === 2) {
                                    printRequestButton.style.display = 'block';
                                } else {
                                    printRequestButton.style.display = 'none';
                                }

                                if (currentStep === 6) {
                                    printEvidenceButton.style.display = 'block';
                                } else {
                                    printEvidenceButton.style.display = 'none';
                                }

                                currentStep++;
                            }

                            if (currentStep > 1) {
                                planCheckButton.disabled = true; // ปิดใช้งานปุ่ม "งานแผนการเรียนตรวจสอบ"
                            }
                        }

                        function planCheck() {
                            const stepContainer = document.getElementById("stepContainer");
                            const steps = stepContainer.querySelectorAll(".step");
                            const editRequestButton = document.getElementById("editRequestButton");

                            if (!planCheckMode) {
                                planCheckMode = true;
                                currentStep = 1;
                                steps[0].querySelector('.circle').innerHTML = '<span style="color: #f0c14b; font-size: 2em;">X</span>';
                                steps[0].querySelector('.text').innerHTML =
                                    '<span style="color: #f0c14b;">งานแผนการเรียนตรวจสอบ : **หมายเหตุเป็นไปตามที่งานแผนการเรียนแจ้ง</span>';
                                editRequestButton.style.display = 'block';
                            } else {
                                planCheckMode = false;
                                steps[0].querySelector('.circle').innerHTML = '';
                                steps[0].querySelector('.text').innerHTML = 'ตรวจสอบรายวิชา';
                                editRequestButton.style.display = 'none';
                            }
                        }

                        function goToEditPage() {
                            window.location.href = 'edit-request.html';
                        }

                        function copyLink() {
                            // แทนที่ 'YOUR_LINK_HERE' ด้วยลิงก์ที่คุณต้องการคัดลอกgoToEditPageedit-request.html
                            const link = 'YOUR_LINK_HERE';
                            const tempInput = document.createElement('input');
                            tempInput.value = link;
                            document.body.appendChild(tempInput);
                            tempInput.select();
                            document.execCommand('copy');
                            document.body.removeChild(tempInput);
                            alert('คัดลอกลิงก์แล้ว!');
                        }

                        function printRequest() {
                            // แทนที่ 'your-request-form.pdf' ด้วยลิงก์ไปยังไฟล์ PDF ของคุณ
                            window.open('your-request-form.pdf', '_blank');
                        }

                        function printPaymentSlip() {
                            // แทนที่ 'payment-slip.pdf' ด้วยลิงก์ไปยังไฟล์ PDF ของใบชำระ
                            window.open('payment-slip.pdf', '_blank');
                        }

                        function printEvidence() {
                            // แทนที่ 'evidence-document.pdf' ด้วยลิงก์ไปยังไฟล์ PDF ของหลักฐานคำร้อง
                            window.open('evidence-document.pdf', '_blank');
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="uploadEvidenceModal" tabindex="-1" aria-labelledby="uploadEvidenceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadEvidenceModalLabel">ข้อมูลหลักฐานการชำระเงิน</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 col-md-6">
                            <label for="evidencePaymentDate" class="form-label">วันที่ชำระเงิน</label>
                            <input type="date" class="form-control" id="evidencePaymentDate">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="evidencePaymentTime" class="form-label">เวลา</label>
                            <input type="time" class="form-control" id="evidencePaymentTime">
                        </div>
                        <div class="mb-3">
                            <label for="evidenceImage" class="form-label">อัปโหลดหลักฐานการชำระเงิน</label>
                            <div class="evidence-upload-container">
                                <label for="evidenceImage" class="evidence-upload-label">คลิกเพื่อเลือกรูปภาพ</label>
                                <input type="file" id="evidenceImage" accept="image/*" style="display: none;">
                                <div id="imagePreview" style="display: none;">
                                    <img id="previewImage" src="#" alt="Image Preview"
                                        style="max-width: 100%; max-height: 200px; display: block; margin: 0 auto;">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btn btn-darkblue">ยืนยัน</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const evidenceImage = document.getElementById('evidenceImage');
        const imagePreview = document.getElementById('imagePreview');
        const previewImage = document.getElementById('previewImage');
        const evidenceUploadLabel = document.querySelector('.evidence-upload-label');

        evidenceImage.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    imagePreview.style.display = 'block';
                    evidenceUploadLabel.style.display = 'none';
                }
                reader.readAsDataURL(file);
            } else {
                previewImage.src = '#';
                imagePreview.style.display = 'none';
                evidenceUploadLabel.style.display = 'block';
            }
        });

        // เพิ่มการคลิกที่รูปภาพเพื่อเลือกไฟล์ใหม่
        previewImage.addEventListener('click', function() {
            evidenceImage.click(); // เรียกการคลิกที่ input file
        });
    </script>
@endsection

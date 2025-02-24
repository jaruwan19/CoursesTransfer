@extends('student.layout')
@section('content')
    <div class="container p-3 border border-1 justify-content-center">
        <h4 class="header">สถานะคำร้อง</h4>
        <div class="container border border-1 justify-content-center">
            <div class="container p-3">
                <div class="row">
                    <div class="col fw-bold text-end">
                        <p>สถานะปัจจุบัน :</p>
                    </div>
                    <div class="col fw-bold text-success">
                        <p>ตรวจสอบรายวิชาเรียบร้อยแล้ว</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col fw-bold text-end">
                        <p>ขั้นตอนถัดไป :</p>
                    </div>
                    <div class="col fw-bold text-darkblue">
                        <p>คัดลอก link ส่งให้อาจารย์ที่ปรึกษาเห็นชอบ</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div id="copyLinkButton" style="display: none;">
                            <button type="submit" class="btn btn-darkblue">คัดลอกลิงก์</button>
                        </div>
                        <div class="step-buttons" id="stepButtons" style="display: none;">
                            <button type="submit" class="btn btn-darkblue">พิมพ์ใบชำระ</button>
                            <button type="submit" class="btn btn-darkblue">แนบหลักฐาน</button>
                        </div>
                        <div id="printRequestButton" style="display: none;">
                            <button type="submit" class="btn btn-darkblue">พิมพ์ใบคำร้อง</button>
                        </div>
                        <div id="printEvidenceButton" style="display: none;">
                            <button type="submit" class="btn btn-darkblue">พิมพ์หลักฐานคำร้อง</button>
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

                    <script>
                        let currentStep = 1;

                        function updateStep() {
                            const stepContainer = document.getElementById("stepContainer");
                            const steps = stepContainer.querySelectorAll(".step");
                            const stepButtons = document.getElementById("stepButtons");
                            const copyLinkButton = document.getElementById("copyLinkButton");
                            const printRequestButton = document.getElementById("printRequestButton");
                            const printEvidenceButton = document.getElementById("printEvidenceButton");

                            if (currentStep <= steps.length) {
                                const currentStepElement = steps[currentStep - 1];
                                const currentCircle = currentStepElement.querySelector('.circle');
                                const currentText = currentStepElement.querySelector('.text');
                                currentCircle.classList.add("completed");
                                currentCircle.innerHTML = "&#10004;";
                                currentStepElement.classList.add("completed");
                                currentText.classList.add("completed");

                                // แสดงปุ่ม "คัดลอกลิงก์" เมื่อถึง step ที่ 1
                                if (currentStep === 1) {
                                    copyLinkButton.style.display = 'block';
                                } else {
                                    copyLinkButton.style.display = 'none';
                                }

                                // แสดงปุ่ม "พิมพ์ใบชำระ" และ "แนบหลักฐาน" เมื่อถึง step "นำส่งเอกสารที่งานทะเบียน"
                                if (currentStep === 4) {
                                    stepButtons.style.display = 'block';
                                } else {
                                    stepButtons.style.display = 'none';
                                }

                                // แสดงปุ่ม "พิมพ์ใบคำร้อง" เมื่อถึง step ที่ 2
                                if (currentStep === 2) {
                                    printRequestButton.style.display = 'block';
                                } else {
                                    printRequestButton.style.display = 'none';
                                }

                                // แสดงปุ่ม "พิมพ์หลักฐานคำร้อง" เมื่อถึง step ที่ 6
                                if (currentStep === 6) {
                                    printEvidenceButton.style.display = 'block';
                                } else {
                                    printEvidenceButton.style.display = 'none';
                                }

                                currentStep++;
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
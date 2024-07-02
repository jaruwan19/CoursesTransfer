<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="app.js">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>
    <nav class="navbar shadow-sm">
        <div class="container  justify-content-between">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="img/supportAndService.jpg" 
                    alt="Logo" 
                    height="80" 
                    class="me-2">
                <div class="text-dark">
                    <h5 class="fw-bold">สำนักส่งเสริมและบริการวิชาการ</h5>
                    <h6>มหาวิทยาลัยราชภัฏศรีสะเกษ</h6>
                </div>
               
            </a>
            <button class="btn btn-outline-warning">ออกจากระบบ</button>
        </div>
    </nav>

    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">รหัสนักศึกษา :</h6>
            <h6>6410014114</h6>
        </div>
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>นางสาวจารุวรรณ ปกป้อง</h6>
        </div>
        <div>
            <h6 class="fw-bolder">สาขาวิชา :</h6>
            <h6>วิศวกรรมซอฟต์แวร์</h6>
        </div>
    </div>
    <div class="container p-3 border border-1 justify-content-center">
        <h2 class="header">สถานะคำร้อง</h2>
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
                        <button type="submit" class="btn btn-darkblue">คัดลอกลิงก์</button>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</body>
</html>
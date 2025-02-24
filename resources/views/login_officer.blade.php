<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="app.js">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    
    
    <div class="container pt-4 ">
        <div class="text-center">
            <img class="mt-4 " style="width: 150px;" src="../img/sskruLogo.png" alt="">
            <h4 class="mt-4 text-warning">
                มหาวิทยาลัยราชภัฏศรีสะเกษ
            </h4>
        </div>
        <div class="col-12 col-sm-8 col-md-6 m-auto mt-4">
            <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label text-darkblue fw-bold">รหัสบัตรประจำตัวประชาชน</label>
                            <input type="number" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-darkblue fw-bold">รหัสผ่าน</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-darkblue btn-lg">เข้าสู่ระบบ</button>
                            {{-- <a href="#" class="btn btn-darkblue btn-lg">เข้าสู่ระบบ</a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
</body>
</html>


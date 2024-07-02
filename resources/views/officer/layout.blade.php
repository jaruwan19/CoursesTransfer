@extends('layout')
@section('header')
<div class="p-3 container d-flex justify-content-between">
    <div>
        <h6 class="fw-bolder">ชื่อวิชา  :</h6>
        <h6>ดร.ปฏิมากร จริยฐิติพงศ์</h6>
    </div>
    <div>
        <h6 class="fw-bolder">สาขาวิชา :</h6>
        <h6>วิศวกรรมซอฟต์แวร์</h6>
    </div>
</div>
@yield('content')

@endsection
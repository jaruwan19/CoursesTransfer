@extends('layout')
@section('header')
<div class="p-3 container d-flex justify-content-between">
    <div>
        <h6 class="fw-bolder">ชื่อ  :</h6>
        <h6>ชื่อเจ้าหน้าที่</h6>
    </div>
    {{-- <div>
        <h6 class="fw-bolder">สาขาวิชา :</h6>
        <h6>วิศวกรรมซอฟต์แวร์</h6>
    </div> --}}
</div>
@yield('content')

@endsection
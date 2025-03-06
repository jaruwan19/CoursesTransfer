@extends('layout')
@section('content')
    <div class="p-3 container d-flex justify-content-between">
        <div>
            <h6 class="fw-bolder">ชื่อ :</h6>
            <h6>{{ $user['officer_name'] ?? 'ไม่พบข้อมูล' }}</h6>
        </div>
    </div>
    <div class="menuofficer-grid">
        @foreach ($menuItems as $menuItem)
            <a href="{{ $menuItem['route'] }}" class="menuofficer-button">
                <img src="{{ asset('img/' . $menuItem['img']) }}" alt="{{ $menuItem['text'] }}">
                <span class="menuofficer-text">{{ $menuItem['text'] }}</span>
            </a>
        @endforeach
    </div>
@endsection

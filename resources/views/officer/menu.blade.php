@extends('officer.layout')
    
@section('content')
    <div class="menuofficer-grid">
        <!-- ลูปผ่านเมนูที่ส่งมาจาก Controller -->
        @foreach($menuItems as $menuItem)
            <a href="{{ $menuItem['route'] }}" class="menuofficer-button">
                <img src="{{ asset('img/' . $menuItem['img']) }}" alt="{{ $menuItem['text'] }}">
                <span class="menuofficer-text">{{ $menuItem['text'] }}</span>
            </a>
        @endforeach
    </div>
@endsection
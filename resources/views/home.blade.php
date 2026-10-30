
@extends('layouts.main')

@section('title', 'Dashboard AgroClima')

@section('content')
<div class="card">
    <h2>Selamat Datang di AgroClima Garut</h2>
    <p>Sistem Prediksi Mikroklimat Tanaman Berbasis LSTM.</p>

    <a href="{{ route('prediksi') }}" class="btn">
        Mulai Input Prediksi
    </a>
</div>
@endsection

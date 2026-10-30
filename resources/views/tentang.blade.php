
@extends('layouts.main')

@section('title', 'Tentang AgroClima')

@section('content')
<div class="card">
    <h2>Tentang AgroClima Garut</h2>

    <p>
        AgroClima Garut merupakan sistem untuk mencatat dan
        menampilkan hasil prediksi kondisi lingkungan tanaman
                guna membantu proses pemantauan lahan pertanian.
    </p>

    <h3>Tujuan Sistem</h3>
    <p>
        Mempermudah petani dalam memantau kondisi mikroklimat,
        menyimpan hasil prediksi, dan menentukan perawatan tanaman.
    </p>

    <h3>Lokasi Pemantauan</h3>
    <ul>
        <li>Kecamatan Garut Kota</li>
        <li>Kecamatan Tarogong Kaler</li>
        <li>Kecamatan Samarang</li>
    </ul>

    <h3>Parameter Mikroklimat</h3>
    <ul>
        <li>Suhu udara (°C)</li>
        <li>Kelembapan udara (%)</li>
        <li>Kelembapan tanah (%)</li>
    </ul>

    <h3>Model Prediksi</h3>
    <p>
        Model yang digunakan adalah Long Short-Term Memory (LSTM),
        yaitu model Deep Learning untuk data berurutan atau time series.
        Pada prototipe ini, hasil prediksi dimasukkan secara manual.
    </p>
</div>
@endsection

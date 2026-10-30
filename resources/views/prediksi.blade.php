
@extends('layouts.main')

@section('title', 'Input Prediksi')

@section('content')
<div class="card">
    <h2>Input Prediksi Mikroklimat</h2>
    <p>Masukkan hasil simulasi prediksi kondisi lahan.</p>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('hasil.prediksi') }}" method="POST">
        @csrf

        <label for="lokasi">Lokasi Lahan</label>
        <select name="lokasi" id="lokasi" required>
            <option value="">-- Pilih Lokasi --</option>
            <option value="Garut Kota">Garut Kota</option>
            <option value="Tarogong Kaler">Tarogong Kaler</option>
            <option value="Samarang">Samarang</option>
        </select>

        <label for="nama_tanaman">Nama Tanaman</label>
        <select name="nama_tanaman" id="nama_tanaman" required>
            <option value="">-- Pilih Tanaman --</option>
            <option value="Padi">Padi</option>
            <option value="Jagung">Jagung</option>
            <option value="Cabai">Cabai</option>
        </select>

        <label for="suhu_udara">Prediksi Suhu Udara (°C)</label>
        <input type="number" name="suhu_udara" id="suhu_udara"
               step="0.1" min="18" max="35"
               value="{{ old('suhu_udara') }}" required>

        <label for="kelembapan_udara">
            Prediksi Kelembapan Udara (%)
        </label>
        <input type="number" name="kelembapan_udara"
               id="kelembapan_udara" min="40" max="100"
               value="{{ old('kelembapan_udara') }}" required>

        <label for="kelembapan_tanah">
            Prediksi Kelembapan Tanah (%)
        </label>
        <input type="number" name="kelembapan_tanah"
               id="kelembapan_tanah" min="0" max="100"
               value="{{ old('kelembapan_tanah') }}" required>

        <button type="submit">Proses Prediksi</button>
    </form>
</div>
@endsection

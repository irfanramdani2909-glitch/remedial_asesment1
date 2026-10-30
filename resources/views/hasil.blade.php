
@extends('layouts.main')

@section('title', 'Hasil Prediksi')

@section('content')
<div class="card">
    <h2>Hasil Prediksi Mikroklimat</h2>

    <div class="table-wrap">
        <table>
            <tr>
                <th>Parameter</th>
                <th>Hasil</th>
            </tr>
            <tr>
                <td>Lokasi Lahan</td>
                <td>{{ $prediksi->lokasi }}</td>
            </tr>
            <tr>
                <td>Nama Tanaman</td>
                <td>{{ $prediksi->nama_tanaman }}</td>
            </tr>
            <tr>
                <td>Suhu Udara</td>
                <td>{{ $prediksi->suhu_udara }} °C</td>
            </tr>
            <tr>
                <td>Kelembapan Udara</td>
                <td>{{ $prediksi->kelembapan_udara }}%</td>
            </tr>
            <tr>
                <td>Kelembapan Tanah</td>
                <td>{{ $prediksi->kelembapan_tanah }}%</td>
            </tr>
            <tr>
                <td>Status Mikroklimat</td>
                <td>
                    @if ($prediksi->status_mikroklimat == 'Kering')
                        <span class="status kering">Kering</span>
                    @elseif ($prediksi->status_mikroklimat == 'Optimal')
                        <span class="status optimal">Optimal</span>
                    @else
                        <span class="status lembap">Terlalu Lembap</span>
                    @endif
                </td>
            </tr>
            <tr>
                <td>Rekomendasi</td>
                <td>{{ $rekomendasi }}</td>
            </tr>
        </table>
    </div>

    <p>
        <a href="{{ route('prediksi') }}" class="btn">Input Lagi</a>
        <a href="{{ route('riwayat') }}" class="btn">Lihat Riwayat</a>
    </p>
</div>
@endsection

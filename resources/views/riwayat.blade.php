
@extends('layouts.main')

@section('title', 'Riwayat Prediksi')

@section('content')
<div class="card">
    <h2>Riwayat Prediksi Mikroklimat</h2>
    <p>Daftar hasil prediksi yang tersimpan di database.</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Lokasi</th>
                    <th>Tanaman</th>
                    <th>Suhu (°C)</th>
                    <th>Kelembapan Udara (%)</th>
                    <th>Kelembapan Tanah (%)</th>
                    <th>Status</th>
                    <th>Waktu Input</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($prediksi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->nama_tanaman }}</td>
                        <td>{{ $item->suhu_udara }}</td>
                        <td>{{ $item->kelembapan_udara }}%</td>
                        <td>{{ $item->kelembapan_tanah }}%</td>
                        <td>
                            @if ($item->status_mikroklimat == 'Kering')
                                <span class="status kering">Kering</span>
                            @elseif ($item->status_mikroklimat == 'Optimal')
                                <span class="status optimal">Optimal</span>
                            @else
                                <span class="status lembap">
                                    Terlalu Lembap
                                </span>
                            @endif
                        </td>
                        <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">
                            Belum ada data prediksi.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <p>
        <a href="{{ route('prediksi') }}" class="btn">
            Tambah Prediksi
        </a>
    </p>
</div>
@endsection

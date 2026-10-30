<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrediksiMikroklimat;

class PrediksiController extends Controller
{
    public function prosesData(Request $request)
    {
        $data = $request->validate([
            'lokasi' => 'required|in:Garut Kota,Tarogong Kaler,Samarang',
            'nama_tanaman' => 'required|in:Padi,Jagung,Cabai',
            'suhu_udara' => 'required|numeric|between:18,35',
            'kelembapan_udara' => 'required|integer|between:40,100',
            'kelembapan_tanah' => 'required|integer|between:0,100',
        ]);

        $tanah = $data['kelembapan_tanah'];

        if ($tanah < 40) {
            $status = 'Kering';
            $rekomendasi = 'Segera lakukan penyiraman atau irigasi.';
        } elseif ($tanah <= 70) {
            $status = 'Optimal';
            $rekomendasi = 'Pertahankan pola perawatan saat ini.';
        } else {
            $status = 'Terlalu Lembap';
            $rekomendasi = 'Kurangi penyiraman dan periksa drainase.';
        }

        $prediksi = PrediksiMikroklimat::create([
            'lokasi' => $data['lokasi'],
            'nama_tanaman' => $data['nama_tanaman'],
            'suhu_udara' => $data['suhu_udara'],
            'kelembapan_udara' => $data['kelembapan_udara'],
            'kelembapan_tanah' => $data['kelembapan_tanah'],
            'status_mikroklimat' => $status,
        ]);

        return view('hasil', compact(
            'prediksi',
            'rekomendasi'
        ));
    }

    public function riwayat()
    {
        $prediksi = PrediksiMikroklimat::latest()->get();

        return view('riwayat', compact('prediksi'));
    }
}

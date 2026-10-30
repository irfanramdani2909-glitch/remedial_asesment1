<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PrediksiMikroklimat;
use Faker\Factory as FakerFactory;

class PrediksiMikroklimatSeeder extends Seeder
{
    public function run(): void
    {
        $faker = FakerFactory::create('id_ID');

        $lokasi = [
            'Garut Kota',
            'Tarogong Kaler',
            'Samarang',
        ];

        $tanaman = [
            'Padi',
            'Jagung',
            'Cabai',
        ];

        for ($i = 0; $i < 15; $i++) {
            $tanah = $faker->numberBetween(20, 90);

            if ($tanah < 40) {
                $status = 'Kering';
            } elseif ($tanah <= 70) {
                $status = 'Optimal';
            } else {
                $status = 'Terlalu Lembap';
            }

            PrediksiMikroklimat::create([
                'lokasi' => $faker->randomElement($lokasi),
                'nama_tanaman' => $faker->randomElement($tanaman),
                'suhu_udara' => $faker->randomFloat(1, 18, 35),
                'kelembapan_udara' => $faker->numberBetween(40, 100),
                'kelembapan_tanah' => $tanah,
                'status_mikroklimat' => $status,
            ]);
        }
    }
}

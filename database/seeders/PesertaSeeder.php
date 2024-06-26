<?php

namespace Database\Seeders;

use App\Models\Peserta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    public function run(): void
    {
        // using factory & faker
        Peserta::factory()->count(100)->create();

        // using colelction
        collect([
            [
                'kab_kota' => fake()->randomElement(['Kabupaten Jayapura', 'Kota Jayapura', 'Kabupaten Biak', 'Kabupaten Sarmi', 'Kabupaten Serui']),
                'jenjang' => fake()->randomElement(['SMK', 'SMA']),
                'npsn' => '123',
                'nama_sekolah' => 'SMK Negeri 1 Sentani',
                'orang_tua' => null,
                'nama_peserta' => 'Michael Janzen Faidiban',
                'tempat_tanggal_lahir' => 'Dosay, 26 September 1992',
                // 'tempat_lahir' => 'Dosay',
                // 'tanggal_lahir' => null,
                'tahun_lulus' => 2011,
                'nomor_ujian' => null,
                'nomor_ijazah' => null,
            ],
            [
                'kab_kota' => fake()->randomElement(['Kabupaten Jayapura', 'Kota Jayapura', 'Kabupaten Biak', 'Kabupaten Sarmi', 'Kabupaten Serui']),
                'jenjang' => fake()->randomElement(['SMA', 'SMK']),
                'npsn' => '123',
                'nama_sekolah' => 'SMK Negeri 1 Sentani',
                'orang_tua' => null,
                'nama_peserta' => 'Charles Luis Yaas',
                'tempat_tanggal_lahir' => 'Sentani, 1 Januari 1990',
                // 'tempat_lahir' => 'Sentani',
                // 'tanggal_lahir' => null,
                'tahun_lulus' => 2009,
                'nomor_ujian' => null,
                'nomor_ijazah' => null,
            ]

        ])->each(function ($collection) {
            Peserta::create($collection);
        });

    }
}

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
                'jenjang' => fake()->randomElement(['SMK', 'SMA']),
                'npsn' => '123',
                'nama_sekolah' => 'SMK Negeri 1 Sentani',
                'orang_tua' => null,
                'nama_peserta' => 'Michael Janzen Faidiban',
                'tempat_lahir' => 'Dosay',
                'tanggal_lahir' => null,
                'tahun_lulus' => 2011,
                'nomor_ujian' => null,
                'nomor_ijazah' => null,
            ],
            [
                'jenjang' => fake()->randomElement(['SMA', 'SMK']),
                'npsn' => '123',
                'nama_sekolah' => 'SMK Negeri 1 Sentani',
                'orang_tua' => null,
                'nama_peserta' => 'Charles Luis Yaas',
                'tempat_lahir' => 'Sentani',
                'tanggal_lahir' => null,
                'tahun_lulus' => 2009,
                'nomor_ujian' => null,
                'nomor_ijazah' => null,
            ]

        ])->each(function ($collection) {
            Peserta::create($collection);
        });

    }
}

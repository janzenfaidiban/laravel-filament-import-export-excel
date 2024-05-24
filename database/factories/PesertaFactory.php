<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PesertaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kab_kota' => fake()->randomElement(['Kabupaten Jayapura', 'Kota Jayapura', 'Kabupaten Biak', 'Kabupaten Sarmi', 'Kabupaten Serui']),
            'jenjang' => fake()->randomElement(['SD', 'SMP', 'SMA', 'SMK']),
            'npsn' => fake()->randomElement(['2011', '2012', '2013', '2014', '2015', '2016', '2017']),
            'nama_sekolah' => fake()->randomElement(['SMK Negeri 1 Sentani', 'SMA Negeri 1 Sentani', 'SMK Negeri 5 Waibu', 'SMP Negeri 1 Sentani', 'SMP Negeri 2 Sentani', 'SMK YPPK Sentani']),
            'orang_tua' => fake()->name(),
            'nama_peserta' => fake()->name(),
            'tempat_tanggal_lahir' => 'Dosay, 26 September 1992',
            // 'tempat_lahir' => fake()->randomElement(['Sentani', 'Jayapura', 'Biak', 'Serui', 'Wamena', 'Sorong', 'Manokwari', 'Timika', 'Merauke']),
            // 'tanggal_lahir' => fake()->date(),
            'tahun_lulus' => fake()->randomElement(['2011', '2012', '2013', '2014', '2015', '2016', '2017']),
            'nomor_ujian' => fake()->randomElement(['2011', '2012', '2013', '2014', '2015', '2016', '2017']),
            'nomor_ijazah' => fake()->randomElement(['2011123', '2012123', '2013123', '2014123', '2015123', '2016123', '2017123']),
        ];
    }
}

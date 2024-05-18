<?php

namespace App\Imports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PesertaImport implements ToModel, WithHeadingRow
{
    use Importable;

    public function model(array $row)
    {
        return new Peserta([
            'jenjang'  => $row['jenjang'],
            'nama_sekolah'  => $row['nama_sekolah'],
            'orang_tua'  => $row['orang_tua'],
            'nama_peserta'  => $row['nama_peserta'],
            'tempat_lahir'  => $row['tempat_lahir'],
            'tanggal_lahir'  => $row['tanggal_lahir'],
            'tahun_lulus'  => $row['tahun_lulus'],
            'nomor_ujian'  => $row['nomor_ujian'],
            'nomor_ijazah'  => $row['nomor_ijazah'],
        ]);
    }
}

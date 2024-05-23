<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PesertaExport implements FromCollection, WithMapping, WithHeadings
{
    
    use Exportable;

    public function __construct(Public Collection $records) 
    {
        // $this->records = $records;
    }

    public function collection()
    {
        // return Peserta::all();
        return $this->records;
    }

    public function map($peserta): array
    {
        return [
            $peserta->jenjang,
            $peserta->nama_sekolah,
            $peserta->orang_tua,
            $peserta->nama_peserta,
            $peserta->tempat_tanggal_lahir,
            // $peserta->tempat_lahir,
            // $peserta->tanggal_lahir,
            $peserta->tahun_lulus,
            $peserta->nomor_ujian,
            $peserta->nomor_ijazah,
        ];
    }

    public function headings(): array
    {
        return [
            'Jenjang',
            'Nama Sekolah',
            'Orang Tua',
            'Nama Peserta',
            'Tempat, Tanggal Lahir',
            // 'Tempat Lahir',
            // 'Tanggal Lahir',
            'Tahun Lulus',
            'Nomor Ujian',
            'Nomor Ijazah',
        ];
    }

}

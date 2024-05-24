<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;

class VisitorController extends Controller
{

    public function index(Request $request)
    {

        $datas = Peserta::where([
            [function ($query) use ($request) {
                if (($jenjang = $request->jenjang)) {$query->where('jenjang', 'LIKE', '%' . $jenjang . '%')->get();}
                if (($npsn = $request->npsn)) {$query->where('npsn', 'LIKE', '%' . $npsn . '%')->get();}
                if (($nama_sekolah = $request->nama_sekolah)) {$query->where('nama_sekolah', 'LIKE', '%' . $nama_sekolah . '%')->get();}
                if (($orang_tua = $request->orang_tua)) {$query->where('npsn', 'LIKE', '%' . $orang_tua . '%')->get();}
                if (($nama_peserta = $request->nama_peserta)) {$query->where('nama_peserta', 'LIKE', '%' . $nama_peserta . '%')->get();}
                if (($tempat_lahir = $request->tempat_lahir)) {$query->where('tempat_lahir', 'LIKE', '%' . $tempat_lahir . '%')->get();}
                if (($tanggal_lahir = $request->tanggal_lahir)) {$query->where('tanggal_lahir', 'LIKE', '%' . $tanggal_lahir . '%')->get();}
                if (($tahun_lulus = $request->tahun_lulus)) {$query->where('tahun_lulus', 'LIKE', '%' . $tahun_lulus . '%')->get();}
                if (($nomor_ujian = $request->nomor_ujian)) {$query->where('nomor_ujian', 'LIKE', '%' . $nomor_ujian . '%')->get();}
                if (($nomor_ijazah = $request->nomor_ijazah)) {$query->where('nomor_ijazah', 'LIKE', '%' . $nomor_ijazah . '%')->get();}
            }]
        ])->latest('id')->paginate(10);
        
        $no = '0';

        return view('visitors.home', compact('datas', 'no'));
    }

    public function hasilPencarian(Request $request)
    {

        $datas = Peserta::where([
            [function ($query) use ($request) {
                if (($jenjang = $request->jenjang)) {$query->where('jenjang', 'LIKE', '%' . $jenjang . '%')->get();}
                if (($npsn = $request->npsn)) {$query->where('npsn', 'LIKE', '%' . $npsn . '%')->get();}
                if (($nama_sekolah = $request->nama_sekolah)) {$query->where('nama_sekolah', 'LIKE', '%' . $nama_sekolah . '%')->get();}
                if (($orang_tua = $request->orang_tua)) {$query->where('npsn', 'LIKE', '%' . $orang_tua . '%')->get();}
                if (($nama_peserta = $request->nama_peserta)) {$query->where('nama_peserta', 'LIKE', '%' . $nama_peserta . '%')->get();}
                if (($tempat_lahir = $request->tempat_lahir)) {$query->where('tempat_lahir', 'LIKE', '%' . $tempat_lahir . '%')->get();}
                if (($tanggal_lahir = $request->tanggal_lahir)) {$query->where('tanggal_lahir', 'LIKE', '%' . $tanggal_lahir . '%')->get();}
                if (($tahun_lulus = $request->tahun_lulus)) {$query->where('tahun_lulus', 'LIKE', '%' . $tahun_lulus . '%')->get();}
                if (($nomor_ujian = $request->nomor_ujian)) {$query->where('nomor_ujian', 'LIKE', '%' . $nomor_ujian . '%')->get();}
                if (($nomor_ijazah = $request->nomor_ijazah)) {$query->where('nomor_ijazah', 'LIKE', '%' . $nomor_ijazah . '%')->get();}
            }]
        ])->latest('id')->paginate(10);
        
        $no = '0';

        return view('visitors.hasilPencarian', compact('datas', 'no'));
    }
}

@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 mb-5">

                <div class="card shadow">
                    <div class="card-body p-5">
                        <h5 class="mb-4 d-block fw-bold">Pencarian Data Peserta</h5>

                        <form action="{{ route('hasilPencarian') }}">

                            <div class="mb-3">
                                <label for="jenjang" class="form-label">Jenjang</label>
                                <input type="text" class="form-control" id="jenjang" name="jenjang" value="@if(request()->get('jenjang')){{ request()->get('jenjang') }}@endif">
                            </div> <!-- input item end -->

                            <div class="mb-3">
                                <label for="npsn" class="form-label">NPSN</label>
                                <input type="text" class="form-control" id="npsn" name="npsn" value="@if(request()->get('npsn')){{ request()->get('npsn') }}@endif">
                            </div> <!-- input item end -->

                            <div class="mb-3">
                                <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="@if(request()->get('nama_sekolah')){{ request()->get('nama_sekolah') }}@endif">
                            </div> <!-- input item end -->
                            
                            <div class="mb-3">
                                <label for="nama_peserta" class="form-label">Nama Peserta</label>
                                <input type="text" class="form-control" id="nama_peserta" name="nama_peserta"  value="@if(request()->get('nama_peserta')){{ request()->get('nama_peserta') }}@endif">
                            </div> <!-- input item end -->
                            
                            <div class="mb-3">
                                <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                                <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="@if(request()->get('tahun_lulus')){{ request()->get('tahun_lulus') }}@endif">
                            </div> <!-- input item end -->

                            <button type="submit" class="btn btn-primary w-100" name="pencarian">
                                <i class="fa-solid fa-search"></i> Cari
                            </button>
                            <a href="{{ url('/') }}" class="btn btn-lg link-secondary w-100 text-decoration-none">
                            <i class="fa-solid fa-rotate"></i> Muat ulang halaman
                            </a>
                        </form>
                    </div>
                </div>

            </div>
            
            <div class="col-xl-9">

                <div class="card shadow p-5">
                    <div class="card-body">
                
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Jenjang</th>
                                        <th>NPSN</th>
                                        <th>Nama Sekolah</th>
                                        {{-- <th>Nama Orang Tua</th> --}}
                                        <th>Nama Lengkap Peserta</th>
                                        {{-- <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th> --}}
                                        <th>Tahun Lulus</th>
                                        <th>Nomor Ujian</th>
                                        <th>Nomor Ijazah</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($datas as $item)
                                        <tr>
                                            <td>{{ ++$no }}</td>
                                            <td>{{ $item->jenjang ?? '' }}</td>
                                            <td>{{ $item->npsn ?? '' }}</td>
                                            <td>{{ $item->nama_sekolah ?? '' }}</td>
                                            {{-- <td>{{ $item->orang_tua ?? '' }}</td> --}}
                                            <td>{{ $item->nama_peserta ?? '' }}</td>
                                            {{-- <td>{{ $item->tempat_lahir ?? '' }}</td> --}}
                                            {{-- <td>{{ $item->tanggal_lahir ?? '' }}</td> --}}
                                            <td>{{ $item->tahun_lulus ?? '' }}</td>
                                            <td>{{ $item->nomor_ujian ?? '' }}</td>
                                            <td>{{ $item->nomor_ijazah ?? '' }}</td>
                                        </tr>
                                        
                                    @empty
                                        <tr>
                                            <td colspan="11">
                                                Data Tidak Ditemukan
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>

                            {{-- {!! $datas->links() !!} --}}
                            {{ $datas->links('vendor.pagination.bootstrap-5') }}
                            
                            {{-- {{ $datas->links('vendor.pagination.bootstrap-4', ['foo' => 'bar']) }} --}}

                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
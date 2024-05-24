@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        @include('visitors.includes.top-content')
        
        <div class="row">
            <div class="col-xl-3 mb-5 rounded-0">

                <div class="card shadow">
                    <div class="card-body p-5">

                        @include('visitors.includes.form')

                    </div>
                </div>

            </div>
            
            <div class="col-xl-9">

                <div class="card shadow p-5 rounded-0">
                    <div class="card-body">
                
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kabupaten/Kota</th>
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
                                            <td>{{ $item->kab_kota ?? '' }}</td>
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
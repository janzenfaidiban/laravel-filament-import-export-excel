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

                        <div class="d-flex gap-3 justify-content-end">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-file-lines me-1"></i> Layanan
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa-solid fa-file-lines me-1"></i> Surat Keterangan Pengganti Ijazah
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa-solid fa-file-lines me-1"></i> Surat Keterangan Kesalahan Penulisan Ijazah
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <a href="{{ url('admin/login') }}" class="btn btn-primary">
                                    <i class="fa-solid fa-door-open me-1"></i> Login
                                </a>
                            </div>
                        </div>

                
                        <div class="py-5">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
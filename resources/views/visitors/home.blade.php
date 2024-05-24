@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        @include('visitors.includes.top-content')

        <div class="row">
            <div class="col-xl-3 mb-5">

                <div class="card shadow">
                    <div class="card-body p-5">

                        

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

                
                        <div class="py-5">
                            
                            <div class="row">
                                <div class="col-xl-8 mx-xl-auto">
                                    <h4>Selamat Datang di Aplikasi Pencarian Data Lulusan</h4>

                                    <p>Kami dengan bangga mempersembahkan sebuah aplikasi inovatif yang dirancang untuk memudahkan pencarian data lulusan dari berbagai jenjang pendidikan, mulai dari SD, SMP, SMA, SMK, hingga program pendidikan non-formal seperti Paket A, Paket B, dan Paket C. Aplikasi ini hadir sebagai solusi modern untuk memenuhi kebutuhan informasi pendidikan yang akurat dan dapat diakses dengan mudah oleh semua kalangan. Dengan antarmuka yang user-friendly dan fitur pencarian yang canggih, kami berharap aplikasi ini dapat membantu para pengguna dalam menemukan data lulusan secara cepat dan efisien.</p>

                                    <p>Sebagai komitmen kami terhadap kualitas pendidikan dan transparansi informasi, aplikasi ini terus diperbarui dan ditingkatkan agar tetap relevan dengan perkembangan teknologi dan kebutuhan masyarakat. Kami percaya bahwa dengan adanya akses yang mudah terhadap data lulusan, masyarakat dapat lebih terbantu dalam mengambil keputusan yang berkaitan dengan pendidikan, baik itu untuk keperluan studi lanjut, pekerjaan, maupun keperluan lainnya. Terima kasih telah menggunakan aplikasi kami, dan kami berharap Anda mendapatkan manfaat yang maksimal dari layanan yang kami sediakan.</p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
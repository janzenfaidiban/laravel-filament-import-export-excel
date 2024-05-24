@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        @include('visitors.includes.top-content')

        <div class="row">
            <div class="col-xl-3 mb-5">

                <div class="card shadow">
                    <div class="card-body p-5">

                        @include('visitors.includes.form')

                    </div>
                </div>

            </div>
            
            <div class="col-xl-9">

                <div class="card shadow p-5">
                    <div class="card-body">

                
                        <div class="py-5">
                            
                            <div class="row">
                                <div class="col-xl-8 mx-xl-auto">
                                    <h2 class="fw-bold text-dark lh-lg">Selamat Datang di Aplikasi Pencarian Data Lulusan</h2>

                                    <p class="lh-lg" style="text-align: justify;">Kami dengan bangga mempersembahkan sebuah aplikasi inovatif yang dirancang untuk memudahkan pencarian data lulusan dari berbagai jenjang pendidikan, mulai dari SD, SMP, SMA, SMK, hingga program pendidikan non-formal seperti Paket A, Paket B, dan Paket C. Aplikasi ini hadir sebagai solusi modern untuk memenuhi kebutuhan informasi pendidikan yang akurat dan dapat diakses dengan mudah oleh semua kalangan. Dengan antarmuka yang user-friendly dan fitur pencarian yang canggih, kami berharap aplikasi ini dapat membantu para pengguna dalam menemukan data lulusan secara cepat dan efisien.</p>

                                    <p class="lh-lg" style="text-align: justify;">Sebagai komitmen kami terhadap kualitas pendidikan dan transparansi informasi, aplikasi ini terus diperbarui dan ditingkatkan agar tetap relevan dengan perkembangan teknologi dan kebutuhan masyarakat. Kami percaya bahwa dengan adanya akses yang mudah terhadap data lulusan, masyarakat dapat lebih terbantu dalam mengambil keputusan yang berkaitan dengan pendidikan, baik itu untuk keperluan studi lanjut, pekerjaan, maupun keperluan lainnya. Terima kasih telah menggunakan aplikasi kami, dan kami berharap Anda mendapatkan manfaat yang maksimal dari layanan yang kami sediakan.</p>
                                </div>
                            </div>

                            @include('visitors.includes.total')
                            
                            

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
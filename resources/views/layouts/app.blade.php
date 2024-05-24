<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{!! ('Data Lulusan Siswa Provinsi Papua') !!}</title>
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Data Lulusan Siswa Provinsi Papua" />
    <meta property="og:description" content="Data Lulusan Siswa Provinsi Papua" />
    <meta property="og:url" content="https://datalulusanpapua.info" />
    <meta property="og:site_name" content="Data Lulusan Siswa Provinsi Papua" />
    <meta property="og:image" content="https://datalulusanpapua.info/favicon.png" />

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('favicon.png') }}" />

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <header class="p-3 p-xl-5">
        <div class="row pt-0 pt-xl-5">
            <div class="col-xl-6 mx-auto">
                <div class="text-center text-xl-start d-sm-inline-block d-xl-flex gap-4">
                    <div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/220px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png" alt="Tut Wuri Handayani" width="100px">
                    </div>
                    <div>
                        <h1 class="fw-bold">Data Kelulusan Siswa</h1>
                        <p>Cari berdasarkan Jenjang, NPSN, Nama Sekolah, Nama Peserta, dan Tahun Lulus.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- header end -->

    <main class="p-1 p-xl-5">
        @yield('content')
    </main>
    <!-- main end -->

    <footer class="py-3 py-xl-5 text-center">
        {{-- <div class="py-1 py-xl-5">
            <a href="#" class="btn btn-secondary">Privacy & Policy</a>
            <a href="#" class="btn btn-secondary">Disclaimer</a>
            <a href="#" class="btn btn-secondary">Q&A</a>
            <a href="#" class="btn btn-secondary">Kontak</a>
        </div> --}}

        <p>Copyright &copy; 2024 - All right reserved.</p>

    </footer>
    <!-- footer end -->
    
</body>
</html>
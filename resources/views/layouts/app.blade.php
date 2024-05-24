<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{!! $siteTitle ?? '' !!}</title>
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{!! $siteTitle ?? '' !!}" />
    <meta property="og:description" content="{!! $siteDescription ?? '' !!}" />
    <meta property="og:url" content="{!! $siteDomain ?? '' !!}" />
    <meta property="og:site_name" content="{!! $siteTitle ?? '' !!}" />
    <meta property="og:image" content="{!! $siteLogo ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Coat_of_arms_of_Papua_2.svg/1200px-Coat_of_arms_of_Papua_2.svg.png' !!}" />

    <!-- Favicon  -->
    <link rel="icon" href="{!! $siteLogo ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Coat_of_arms_of_Papua_2.svg/1200px-Coat_of_arms_of_Papua_2.svg.png' !!}" />

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <header class="p-3 p-xl-5 bg-primary text-white shadow">
        <div class="row pt-0 ">
            <div class="col-xl-8">
                <a href="{{ route('visitor.home') }}" class="link-white">
                    <div class="text-center text-xl-start d-sm-inline-block d-xl-flex gap-4">
                    <div>
                        <img src="{!! $siteLogo ?? 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Coat_of_arms_of_Papua_2.svg/1200px-Coat_of_arms_of_Papua_2.svg.png' !!}" alt="Tut Wuri Handayani" width="80px">
                    </div>
                    <div>
                        <h1 class="fw-bold link-light ">{!! $siteTitle ?? '' !!}</h1>
                        <p class="fs-4 link-light ">{!! $siteDescription ?? '' !!}</p>
                    </div>
                </div>
                </a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</body>
</html>
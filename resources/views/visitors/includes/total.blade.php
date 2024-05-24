<div class="row">
    <div class="col-xl-8 mx-xl-auto">
        
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-3">
                <a href="{{ url('hasilPencarian?jenjang=SD') }}" class="btn btn-outline-primary w-100">
                    SD: <span class="fw-bold">{{ $totalSD ?? 'Total SD' }} Siswa</span>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-3">
                <a href="{{ url('hasilPencarian?jenjang=SMP') }}" class="btn btn-outline-primary w-100">
                    SMP: <span class="fw-bold">{{ $totalSMP ?? 'Total SMP' }} Siswa</span>
                </a>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-3">
                <a href="{{ url('hasilPencarian?jenjang=SMA') }}" class="btn btn-outline-primary w-100">
                    SMA: <span class="fw-bold">{{ $totalSMA ?? 'Total SMA' }} Siswa</span>
                </a>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-3">
                <a href="{{ url('hasilPencarian?jenjang=SMK') }}" class="btn btn-outline-primary w-100">
                    SMK: <span class="fw-bold">{{ $totalSMK ?? 'Total SMK' }} Siswa</span>
                </a>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-3">
                <a href="{{ url('hasilPencarian?jenjang=Paket-A') }}" class="btn btn-outline-primary w-100">
                    Paket-A: <span class="fw-bold">{{ $totalPaketA ?? 'Total Paket-A' }} Siswa</span>
                </a>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-3">
                <a href="{{ url('hasilPencarian?jenjang=Paket-B') }}" class="btn btn-outline-primary w-100">
                    Paket-B: <span class="fw-bold">{{ $totalPaketB ?? 'Total Paket-B' }} Siswa</span>
                </a>
            </div>
            
            <div class="col-xl-3 col-md-6 mb-3">
                <a href="{{ url('hasilPencarian?jenjang=Paket-C') }}" class="btn btn-outline-primary w-100">
                    Paket-C: <span class="fw-bold">{{ $totalPaketC ?? 'Total Paket-C' }} Siswa</span>
                </a>
            </div>

        </div>

    </div>
</div>
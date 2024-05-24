<form action="{{ route('hasilPencarian') }}">

    <div class="mb-3">
        <label for="kab_kota" class="form-label">Kabupaten/Kota</label>
        <input type="text" class="form-control rounded-0" id="kab_kota" name="kab_kota" value="@if(request()->get('kab_kota')){{ request()->get('kab_kota') }}@endif">
    </div> <!-- input item end -->

    {{-- <div class="mb-3">
        <label for="jenjang" class="form-label">Jenjang</label>
        <input type="text" class="form-control" id="jenjang" name="jenjang" value="@if(request()->get('jenjang')){{ request()->get('jenjang') }}@endif">
    </div> <!-- input item end --> --}}

    <div class="mb-3">
        <label for="jenjang" class="form-label">Jenjang</label>
        <select class="form-select form-select rounded-0" aria-label="Small select example" id="jenjang" name="jenjang">
            <option selected></option>
            <option value="SD" @if(isset($_GET['jenjang']) && $_GET['jenjang'] == 'SD') selected @endif>SD</option>
            <option value="SMP" @if(isset($_GET['jenjang']) && $_GET['jenjang'] == 'SMP') selected @endif>SMP</option>
            <option value="SMA" @if(isset($_GET['jenjang']) && $_GET['jenjang'] == 'SMA') selected @endif>SMA</option>
            <option value="SMK" @if(isset($_GET['jenjang']) && $_GET['jenjang'] == 'SMK') selected @endif>SMK</option>
            <option value="Paket-A" @if(isset($_GET['jenjang']) && $_GET['jenjang'] == 'Paket-A') selected @endif>Paket-A</option>
            <option value="Paket-B" @if(isset($_GET['jenjang']) && $_GET['jenjang'] == 'Paket-B') selected @endif>Paket-B</option>
            <option value="Paket-C" @if(isset($_GET['jenjang']) && $_GET['jenjang'] == 'Paket-C') selected @endif>Paket-C</option>
          </select>
    </div> <!-- input item end -->



    <div class="mb-3">
        <label for="npsn" class="form-label">NPSN</label>
        <input type="text" class="form-control rounded-0" id="npsn" name="npsn" value="@if(request()->get('npsn')){{ request()->get('npsn') }}@endif">
    </div> <!-- input item end -->

    <div class="mb-3">
        <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
        <input type="text" class="form-control rounded-0" id="nama_sekolah" name="nama_sekolah" value="@if(request()->get('nama_sekolah')){{ request()->get('nama_sekolah') }}@endif">
    </div> <!-- input item end -->
    
    <div class="mb-3">
        <label for="nama_peserta" class="form-label">Nama Peserta</label>
        <input type="text" class="form-control rounded-0" id="nama_peserta" name="nama_peserta"  value="@if(request()->get('nama_peserta')){{ request()->get('nama_peserta') }}@endif">
    </div> <!-- input item end -->
    
    <div class="mb-3">
        <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
        <input type="text" class="form-control rounded-0" id="tahun_lulus" name="tahun_lulus" value="@if(request()->get('tahun_lulus')){{ request()->get('tahun_lulus') }}@endif">
    </div> <!-- input item end -->

    <button type="submit" class="btn btn-primary rounded-0 w-100" name="pencarian">
        <i class="fa-solid fa-search"></i> Cari
    </button>
    <a href="{{ url('/') }}" class="btn btn-sm btn-link rounded-0 link-secondary w-100 text-decoration-none mt-3">
    <i class="fa-solid fa-rotate"></i> Muat ulang halaman
    </a>
</form>
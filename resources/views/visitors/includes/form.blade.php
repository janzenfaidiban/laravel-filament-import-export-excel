<form action="{{ route('hasilPencarian') }}">

    <div class="mb-3">
        <label for="kab_kota" class="form-label">Kabupaten/Kota</label>
        <input type="text" class="form-control" id="kab_kota" name="kab_kota" value="@if(request()->get('kab_kota')){{ request()->get('kab_kota') }}@endif">
    </div> <!-- input item end -->

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
@extends('layouts.app')

@section('title', 'New Form')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Form</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">New Form</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('form.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>FORMULIR PENDAFTARAN PESERTA LIGA PENDIDIKAN INDONESIA</h4>
                        </div>
                        <div class="card-body">
                            <h6>Yang bertanggungjawab dibawah ini:</h6>
                            <div class="form-group">
                                <label>Nama Lengkap *</label>
                                <input type="text"
                                    class="form-control @error('nama')
                                    is-invalid
                                @enderror"
                                    name="nama" required>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jabatan *</label>
                                <input type="text"
                                    class="form-control @error('jabatan')
                                    is-invalid
                                @enderror"
                                    name="jabatan" required>
                                @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <h6>Dengan ini mendaftarkan tim sepakbola dibawah tanggungjawab saya menjadi peserta LIGA PENDIDIKAN INDONESIA Tahun 2009 dan bersedia mematuhi segala peraturan serta ketertiban yang berlaku di LIGA PENDIDIKAN INDONESIA.</h6>
                            <h6>Berikut ini saya sampaikan data-data yang berkaitan dengan tim peserta :</h6>
                            <div class="form-group">
                                <label>Nama Sekolah/Perguruan Tinggi *</label>
                                <input type="text"
                                    class="form-control @error('perguruan_tinggi')
                                    is-invalid
                                @enderror"
                                    name="perguruan_tinggi" required>
                                @error('perguruan_tinggi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kategori Sekolah *</label>
                                <select name="kategori_sekolah" class="form-control @error('kategori_sekolah')
                                is-invalid
                            @enderror" required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    <option value="SMK">SMK</option>
                                    <option value="MAN">MAN</option>
                                    <option value="SMA">SMA</option>
                                    <option value="KULIAH">KULIAH</option>
                                    <option value="SMP">SMP</option>
                                </select>
                                @error('kategori_sekolah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <h6>Alamat Sekolah:</h6>
                            <div class="form-group">
                                <label>Jalan *</label>
                                <input type="text"
                                    class="form-control @error('jalan')
                                    is-invalid
                                @enderror"
                                    name="jalan" required>
                                @error('jalan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>RT/RW/Desa/Kelurahan *</label>
                                <input type="text"
                                    class="form-control @error('rt_rw_desa_kel')
                                    is-invalid
                                @enderror"
                                    name="rt_rw_desa_kel" required>
                                @error('rt_rw_desa_kel')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kecamatan *</label>
                                <input type="text"
                                    class="form-control @error('kecamatan')
                                    is-invalid
                                @enderror"
                                    name="kecamatan" required>
                                @error('kecamatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Provinsi *</label>
                                <select name="provinsi" class="form-control @error('provinsi')
                                is-invalid
                            @enderror" required>
                                    <option value="" disabled selected>Pilih Provinsi</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                </select>
                                @error('provinsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kabupaten/Kota *</label>
                                <select name="kabupaten_kota" class="form-control @error('kabupaten_kota')
                                is-invalid
                            @enderror" required>
                                <option value="" disabled selected>Pilih Kabupaten/Kota</option>
                                    <option value="Kabupaten Balangan">Kabupaten Balangan</option>
                                    <option value="Kabupaten Banjar">Kabupaten Banjar</option>
                                    <option value="Kabupaten Barito Kuala">Kabupaten Barito Kuala</option>
                                    <option value="Kabupaten Hulu Sungai Selatan">Kabupaten Hulu Sungai Selatan</option>
                                    <option value="Kabupaten Hulu Sungai Tengah">Kabupaten Hulu Sungai Tengah</option>
                                    <option value="Kabupaten Hulu Sungai Utara">Kabupaten Hulu Sungai Utara</option>
                                    <option value="Kabupaten Kotabaru">Kabupaten Kotabaru</option>
                                    <option value="Kabupaten Tabalong">Kabupaten Tabalong</option>
                                    <option value="Kabupaten Tanah Bumbu">Kabupaten Tanah Bumbu</option>
                                    <option value="Kabupaten Tapin">Kabupaten Tapin</option>
                                    <option value="Kota Banjarbaru">Kota Banjarbaru</option>
                                    <option value="Kota Banjarmasin">Kota Banjarmasin</option>
                                </select>
                                @error('kabupaten_kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kode Pos *</label>
                                <input type="text"
                                    class="form-control @error('kode_pos')
                                    is-invalid
                                @enderror"
                                    name="kode_pos" required>
                                @error('kode_pos')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor NPSN</label>
                                <input type="text"
                                    class="form-control @error('npsn')
                                    is-invalid
                                @enderror"
                                    name="npsn">
                                @error('npsn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <h6>NPSN Wajib Dimasukkan Jika Ada</h6>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telpon *</label>
                                <input type="text"
                                    class="form-control @error('telp')
                                    is-invalid
                                @enderror"
                                    name="telp" required>
                                @error('telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <h6>Contoh: 021 - 7333333, 0852 - 7333333</h6>
                            </div>
                            <div class="form-group">
                                <label>Nomor Fax</label>
                                <input type="text"
                                    class="form-control @error('no_fax')
                                    is-invalid
                                @enderror"
                                    name="no_fax">
                                @error('no_fax')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    name="email" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Resi Pembayaran *</label>
                                <input type="text"
                                    class="form-control @error('resi_pembayaran')
                                    is-invalid
                                @enderror"
                                    name="resi_pembayaran" required>
                                @error('resi_pembayaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <h6>* = Wajib Diisi</h6>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush

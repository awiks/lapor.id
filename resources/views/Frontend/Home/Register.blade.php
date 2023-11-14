@extends('Template.Frontend')
@push('title',$title)
@section('content')
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container">
        <h2>Daftar</h2>
        <div class="row">
            <div class="col-md-8 m-auto">
                <form action="" class="complaint-form">
                    <div class="alert alert-warning mb-4">
                        <p class="text-dark text-start lh-sm mb-2">Mengapa kami meminta data ini?</p>
                        <p class="text-dark text-start text-muted lh-sm">Layanan LAPORKAN mengumpulkan data pribadi pengguna sebagai jaminan keabsahan dari aduan atau aspirasi yang disampaikan, pengenal identitas, memverifikasi akun dan mengirim notifikasi laporan, menilai tingkat partisipasi publik, pengolahan dan analisis data, penyusunan perencanaan dan pengambilan kebijakan, monitoring dan evaluasi, dan mendorong terciptanya kebijakan yang inklusif.</p>
                    </div>
                    <h5 class="separator mb-4 text-muted"><span>Gunakan Akun Media Sosial Anda</span></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-grid">
                                <a href="" class="btn btn-block btn-facebook mb-3">
                                    <i class="fa-brands fa-facebook-f"></i> Facebook
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-grid">
                                <a href="" class="btn btn-block btn-twitter mb-3">
                                    <i class="fa-brands fa-x-twitter"></i> Twitter
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid mb-3">
                        <a href="" class="btn btn-block btn-google">
                          <i class="fa-brands fa-google"></i> Google
                        </a>
                    </div>
                    <h5 class="separator mb-4 text-muted"><span>Atau</span></h5>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control rounded-0" placeholder="Nomor Induk Kependudukan (KTP)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control rounded-0" placeholder="Nama Lengkap">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Tempat Tinggal Saat Ini</label>
                                <input type="text" class="form-control rounded-0" placeholder="Ketik Tempat Tinggal Saat Ini">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="text" class="form-control rounded-0" placeholder="Pilih Tanggal Lahir">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control rounded-0" placeholder="Ketik Jenis Kelamin">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">No. Telp Aktif</label>
                                <input type="text" class="form-control rounded-0" placeholder="Minimal 8-14 Angka">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Pekerjaan</label>
                                <select name="" class="form-control rounded-0">
                                    <option value="">Pilih Status</option>
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Penyandang Disabilitas?</label>
                                <select name="" class="form-control rounded-0">
                                    <option value="">Pilih Status</option>
                                    <option value="0">Tidak</option>
                                    <option value="1">Ya</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control rounded-0" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control rounded-0" placeholder="laporkan@contoh.com">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control rounded-0" placeholder="Minimal 8 karakter & berisi alfanumerik">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label class="form-label">Password Confirmation</label>
                                <input type="text" class="form-control rounded-0" placeholder="Minimal 8 karakter & berisi alfanumerik">
                            </div>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-block btn-warning">DAFTAR</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="text-center my-5">
            <a href="{{ url('/') }}" class="btn btn-danger">KEMBALI KE HALAMAN DEPAN</a>
        </div>

    </div>

   
</section>

@endsection

@push('Modal')
@include('Template.ModalLogin')
@endpush
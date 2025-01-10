@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Data Siswa') }}</div>

                <div class="card-body">
                    <form action="{{ route('ppdb.update', $siswa->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $siswa->nama_lengkap }}" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki disabled"> Laki-Laki
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" disabled> Perempuan
                         </div>
                         <div class="form-group mb-3">
                            <label class="form-label">Agama :</label>
                            <select name="agama" class="form-control" disabled>
                                <option selected>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                          </div>
                          <div class="form-group mb-2">
                            <label class="form-label">Alamat :</label>
                            <textarea name="alamat" id="" cols="30" rows="5" class="form-control" placeholder="{{ $siswa->alamat }}" disabled></textarea>
                          </div>
                          <div class="form-group mb-2">
                            <label class="form-label">No Telepon :</label>
                            <input type="number" class="form-control" name="telepon" placeholder="81234***" value="{{ $siswa->telepon }}"disabled>
                          </div>
                          <div class="form-group mb-2">
                            <label class="form-label">Asal Sekolah :</label>
                            <input type="text" class="form-control" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" disabled>
                          </div>
                        <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

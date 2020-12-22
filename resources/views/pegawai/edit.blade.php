@extends('master.app')

@section('title')

Edit Akun

@stop

@section('content')
<section class="section">
  <div class="section-body">
    <div class="row mt-sm-4">
      <div class=" col-md">
        <div class="card">
          <form action ='{{Route('updatePegawai',[$pegawai->id])}}' method="post" class="needs-validation" novalidate="">
              {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-6 col-12">
                    <label>Username</label>
                    <input name ='username'type="text" class="form-control" value="{{$pegawai->name}}" required="">
                    <div class="invalid-feedback">
                      Silakan cek kembali dan lengkapi form
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-20">
                    <label>Nama Pegawai</label>
                    <input name = 'nama' type="text" class="form-control" value="{{$pegawai->biodata->nama}}" required="">
                    <div class="invalid-feedback">
                     Silakan cek kembali dan lengkapi form
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md">
                    <label>Email</label>
                  <input name = 'email'type="email" class="form-control" disabled value="{{$pegawai->email}}" required="">
                    <div class="invalid-feedback">
                      Silakan cek kembali dan lengkapi form
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md">
                    <label>Alamat</label>
                    <input name ='alamat' type="text" class="form-control" value="{{$pegawai->biodata->alamat}}" required="">
                    <div class="invalid-feedback">
                      Silakan cek kembali dan lengkapi form
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>No Telephone</label>
                    <input name='no_telephone' type="number" class="form-control" value="{{$pegawai->biodata->no_telephone}}" required="">
                    <div class="invalid-feedback">
                      Silakan cek kembali dan lengkapi forme
                    </div>
                  </div>
                  <div class="form-group col-md-5 col-12" style="margin-top: 28px">
                    <select name='status' class="custom-select">
                      <option selected disabled>Status Pegawai</option>
                      <option value="1"@if($pegawai->status_id=='1')selected @endif>Aktif</option>
                      <option value="2"@if($pegawai->status_id=='2')selected @endif>Nonaktif</option>
                    </select>
                    <div class="invalid-feedback">
                     Silakan cek kembali dan lengkapi form
                    </div>
                  </div>
                </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
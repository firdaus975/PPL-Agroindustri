@extends('master.app')

@section('title')

Keuangan-Pengeluaran

@stop
@section('content')
<section class="section">
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="card">
            <form method="post" action="{{Route('updatePengeluaran',[$pengeluaran->id])}}" class="needs-validation" novalidate="">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-7 col-12" >
                    <label>Tanggal</label>
                    <input name ='tanggal'type="text" class="form-control" value="{{$pengeluaran->tanggal}}" required="">
                    <div class="invalid-feedback">
                      Silakan cek kembali dan lengkapi form
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Kegiatan</label>
                      <input name ='kegiatan'type="text" class="form-control" value="{{$pengeluaran->kegiatan}}" required="">
                      <div class="invalid-feedback">
                        Silakan cek kembali dan lengkapi form
                      </div>
                    </div>
                    <div class="form-group col-md-5 col-12">
                      <input name ='userId'type="text" class="form-control" value="{{Auth::user()->id}}" required="" hidden>
                      <div class="invalid-feedback">
                        Silakan cek kembali dan lengkapi form
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Biaya Dikeluarakan</label>
                      <input name = 'biaya'type="number" class="form-control" placeholder="Rp......." value="{{$pengeluaran->biaya}}" required="">
                      <div class="invalid-feedback">
                        Silakan cek kembali dan lengkapi form
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-footer text-center">
                <button class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@stop
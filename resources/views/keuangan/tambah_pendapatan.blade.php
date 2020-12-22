@extends('master.app')

@section('title')

Keuangan-Pengejualan

@stop
@section('content')
<section class="section">
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="card">
            <form method="post" action="{{Route('postPenjualan')}}" class="needs-validation" novalidate="">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-7 col-12" >
                    <label>Tanggal</label>
                    <input name ='tanggal'type="date" class="form-control" value="" required="">
                    <div class="invalid-feedback">
                      Silakan cek kembali dan lengkapi form
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Nama Pembeli</label>
                      <input name ='pembeli'type="text" class="form-control" value="" required="">
                      <div class="invalid-feedback">
                        Silakan cek kembali dan lengkapi form
                      </div>
                    </div>
                  </div>
				                    <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Berat Karet</label>
                      <input name = 'beratKaret'type="number" class="form-control" placeholder="Rp......." value="" required="">
                      <div class="invalid-feedback">
                        Silakan cek kembali dan lengkapi form
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Total Harga</label>
                      <input name = 'totalHarga'type="number" class="form-control" placeholder="Rp......." value="" required="">
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
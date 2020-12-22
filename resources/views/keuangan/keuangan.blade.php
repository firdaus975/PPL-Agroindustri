@extends('master.app')

@section('title')

Keuangan

@stop

@section('content')

<section>
    <div class="section">
        <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Pengeluaran Pabrik</h5>
              <a href="{{Route('pengeluaranPabrik')}}" class="btn btn-primary">Lanjutkan</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Penjualan Pabrik</h5>
              <a href="{{Route('pendapatanPabrik')}}" class="btn btn-primary">Lanjutkan</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Gaji Pegawai</h5>
              <a href="{{Route('gaji')}}" class="btn btn-primary">Lanjutkan</a>
            </div>
          </div>
    </div>
</section>

@stop
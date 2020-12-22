@extends('master.app')

@section('title')

Keuangan-Gaji

@stop

@section('content')

<section>
    <div class="section">
        <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Gaji ADM</h5>
              <a href="{{Route('gaji2',[2])}}" class="btn btn-primary">Lanjutkan</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Gaji Pegawai</h5>
              <a href="{{Route('gaji2',[3])}}" class="btn btn-primary">Lanjutkan</a>
            </div>
          </div>
    </div>
</section>

@stop
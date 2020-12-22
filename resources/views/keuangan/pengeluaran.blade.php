@extends('master.app')

@section('title')

Keuangan-Pengeluaran

@stop
@section('content')
<section>
<div class="d-flex">
    <a href="{{Route('tambahPengeluaran')}}">

      <button class="btn btn-primary" >Tambah Pengeluaran</button>
    </a>
</div>
   <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="card">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th scope="col" >No</th>
                    <th scope="col" style="text-align: center">Kegiatan</th>
                    <th scope="col" style="text-align: center">Tanggal</th>
                    <th scope="col"  style="text-align: center">Biaya Kegiatan</th>
                    <th scope="col"  style="text-align: center">Aksi</th>
                  </tr>
              </thead>
              @php
                  $i=1;
              @endphp


              <tbody>
                @forelse ($pengeluaran as $pr)
                <tr>
                  <th scope="row">{{$i}}</th>
                  <td style="text-align: center">{{$pr->kegiatan}}</td>
                  <td style="text-align: center">{{$pr->tanggal}}</td>
                  <td style="text-align: center">@currency($pr->biaya)</td>
                  <td style="text-align: center"><a href="{{Route('editPengeluaran',[$pr->id])}}"><button class="btn btn-warning">Edit</button></a></td>
                </tr>
                @php
                    $i++;
                @endphp
                @empty
                <div class="alert alert-info" role="alert">
                  <h3>
                    Data Tidak Ada atau Belum Diinputkan !!!
                  </h3>
                </div>
              
                @endforelse
              </tbody>
            </table>

</section>
@stop
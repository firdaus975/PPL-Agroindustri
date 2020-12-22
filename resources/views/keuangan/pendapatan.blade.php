@extends('master.app')

@section('title')

Keuangan-Penjualan Karet

@stop
@section('content')
<section>
<div class="d-flex">
@if(Auth::user()->role_id == 1)
    <a href="{{Route('tambahPendapatan')}}">

      <button class="btn btn-primary" >Tambah Pendapatan</button>
    </a>
@endif
</div>
   <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="card">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th scope="col" >No</th>
                    <th scope="col" style="text-align: center">Nama Pembeli</th>
                    <th scope="col" style="text-align: center">Tanggal</th>
                    <th scope="col" style="text-align: center">Berat Karet</th>
                    <th scope="col"  style="text-align: center">Harga Karet</th>
					@if(Auth::user()->role_id == 1)
                    <th scope="col"  style="text-align: center">Aksi</th>
					@endif
                  </tr>
              </thead>
              <tbody>
 
                @php
                $i=1;    
                @endphp
                @foreach($penjualan as $p)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td style="text-align: center">{{$p->nama_pembeli}}</td>
                    <td style="text-align: center">{{$p->tanggal}}</td>
                    <td style="text-align: center">{{$p->berat_karet}}Kg</td>
                    <td style="text-align: center">@currency($p->total_harga)</td>
					@if(Auth::user()->role_id == 1)
                    <td style="text-align: center"><a href="{{Route('editPenjualan',[$p->id])}}"><button class="btn btn-warning">Edit</button></a>
				@endif
                </tr>
               @php
                   $i++;
               @endphp
              </tbody>
              @endforeach
            </table>

</section>
@stop
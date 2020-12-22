@extends('master.app')

@section('title')

Keuangan-Pedapatan

@stop
@section('content')
<section>
<div class="d-flex">
    <a href="{{Route('lihatGaji')}}">

      <button class="btn btn-primary" >Lihat Rekap Gaji</button>
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
                    <th scope="col" style="text-align: center">Nama </th>
                    <th scope="col" style="text-align: center">Jabatan</th>
                    <th scope="col"  style="text-align: center">Aksi</th>
                  </tr>
              </thead>
              <tbody>
 
                @php
                $i=1;    
                @endphp
                @foreach( $gajiPegawai as $g)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td style="text-align: center">{{$g->name}}</td>
                    <td style="text-align: center">{{$g->role->name_role}}</td>
                    <td style="text-align: center"><a href="{{Route('tambahGaji',[$g->id])}}"><button class="btn btn-warning">Buat</button>
					<a href="{{Route('rincianGaji',[$g->id])}}"><button class="btn btn-warning">Lihat</button></a></a>
                </tr>
               @php
                   $i++;
               @endphp
              </tbody>
              @endforeach
            </table>

</section>
@stop
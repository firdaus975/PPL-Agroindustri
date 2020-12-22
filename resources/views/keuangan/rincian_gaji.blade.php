@extends('master.app')

@section('title')

Keuangan-Lihat Gaji

@stop
@section('content')
<section>
   <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="card"style="overflow:auto;">
            <table class="table table-striped" >
              <thead>
                <tr>
                    <th scope="col" >No</th>
                    <th scope="col" style="text-align: center">Gaji Pokok</th>
                    <th scope="col" style="text-align: center">Gaji Lembur</th>
                    <th scope="col" style="text-align: center">Biaya Transportasi</th>
                    <th scope="col" style="text-align: center">Biaya Kesehatan</th>
                    <th scope="col" style="text-align: center">Tunjangan kesejahteraan</th>
                    <th scope="col" style="text-align: center">Biaya Makan</th>
                    <th scope="col" style="text-align: center">Bulan</th>
					@if(Auth::user()->role_id == 1)
                    <th scope="col" style="text-align: center">Aksi</th>
					@endif
					
                  </tr>
              </thead>
              <tbody>

                @php
                $i=1;    
                @endphp
                @foreach( $gaji as $g)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td style="text-align: center">{{$g->gaji_pokok}}</td>
                    <td style="text-align: center">{{$g->gaji_lembur}}</td>
                    <td style="text-align: center">{{$g->biaya_transportasi}}</td>
                    <td style="text-align: center">{{$g->tunjangan_kesehatan}}</td>
                    <td style="text-align: center">{{$g->tunjangan_kesejahteraan}}</td>
                    <td style="text-align: center">{{$g->biaya_makan}}</td>
                    <td style="text-align: center">{{$g->bulan->name_bulan}}</td>
					@if(Auth::user()->role_id == 1)
                    <td style="text-align: center"><a href="{{Route('editGaji',[$g->id])}}"><button class="btn btn-warning">Buat</button></a></td>
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
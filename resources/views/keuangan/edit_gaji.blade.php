@extends('master.app')

@section('title')

Keuangan-Gaji

@stop
@section('content')
<section class="section">
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="card">
            <form method="post" action="{{Route('updateGaji',[$gaji->id,$gaji->user_id])}}" class="needs-validation" novalidate="">
                {{ csrf_field() }}

              <div class="card-body">
                <div class="row">

				{{$gaji->id}}
                  <div class="form-group col-md-6 col-12" >
                    <label>Gaji Pokok</label>
                    <input name ='gajiPokok'type="number" class="form-control" value="{{$gaji->gaji_pokok}}" required="">
                    <div class="invalid-feedback">
                      Silakan cek kembali dan lengkapi form
                    </div>
                  </div>
                  <div class="form-group col-md-6 col-12" >
                    <label>Gaji Lembur</label>
                    <input name ='gajiLembur'type="number" class="form-control" value="{{$gaji->gaji_lembur}}" required="">
                    <div class="invalid-feedback">
                      Silakan cek kembali dan lengkapi form
                    </div>
                  </div>
                </div>
                <div class="row">
                      <div class="form-group col-md-6 col-12" >
                        <label>Tunjangan Kesehatan</label>
                        <input name ='tunjanganKesehatan'type="number" class="form-control" value="{{$gaji->tunjangan_kesehatan}}" required="">
                        <div class="invalid-feedback">
                          Silakan cek kembali dan lengkapi form
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-12" >
                        <label>Tunjangan Kesejahteraan</label>
                        <input name ='tunjanganKesejahteraan'type="number" class="form-control" value="{{$gaji->tunjangan_kesejahteraan}}" required="">
                        <div class="invalid-feedback">
                          Silakan cek kembali dan lengkapi form
                        </div>
                      </div>
                </div>
                @php
                    $bulan=date('m');
                @endphp
				{{$gaji->id}}
                <div class="row">
                    <div class="form-group col-md-6 col-12" >
                      <label>Biaya Makan</label>
                      <input name ='biayaMakan'type="number" class="form-control" value="{{$gaji->biaya_makan}}" required="">
                      <div class="invalid-feedback">
                        Silakan cek kembali dan lengkapi form
                      </div>
                    </div>
                    <div class="form-group col-md-6 col-12" >
                      <label>Biaya Transportasi</label>
                      <input name ='biayaTransportasi'type="number" class="form-control" value="{{$gaji->biaya_transportasi}}" required="">
                      <div class="invalid-feedback">
                        Silakan cek kembali dan lengkapi form
                      </div>
                    </div>
              </div>
			 </div>
                  {{-- <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Gaji Lembur</label>
                      <input name ='gajiLembur'type="text" class="form-control" value="" required="">
                      <div class="invalid-feedback">
                        Silakan cek kembali dan lengkapi form
                      </div>
                    </div>
                  </div> --}}

              <div class="card-footer">
			  <button class="btn btn-primary float-right" style="margin-bottom:20px;">Simpan</button>
			   <a href="{{ url()->previous() }}" class="btn btn-primary float-right "style="margin-right:5px;" >Kembali</a>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@stop
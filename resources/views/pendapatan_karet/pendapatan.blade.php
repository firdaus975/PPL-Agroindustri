@extends('master.app')

@section('title')

Pendapatan

@stop

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="confirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="form-group col-md-7 col-12">
            <select  name='confirm' class="custom-select"  >
              <option selected>Status Konfirmasi</option>
              <option  value="1"selected >Belum Dikonfirmasi</option>
              <option  value="2"selected >Sudah Dikonfirmasi</option>
            </select>
            <div class="invalid-feedback">
              Please fill in the 
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<section class="section">
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class=" col-md">
          <div class="card">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Username</th>
                  <th scope="col">Berat Bersih</th>
                  <th scope="col">Berat Kotor</th>
                  <th scope="col">Tanggal Input</th>
                  <th scope="col">Tanggal Edit</th>
                  <th scope="col">Status</th>
                  @if(Auth::user()->role_id != 1 )
                  <th scope="col">Aksi</th>
                  @endif
                  @if(Auth::user()->role_id == 2 )
                  <th scope="col">Verifikasi</th>
                  @endif
                  
                  
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($data_pendapatan as $pendapatan)
                <tr>
                  <th scope="row">{{$pendapatan->id}}</th>
                  <td>{{$pendapatan->user->name}}</td>
                  <td>{{$pendapatan->berat_bersih}}</td>
                  <td>{{$pendapatan->berat_kotor}}</td>
                <td>{{$pendapatan->created_at->format('Y/m/d')}}</td>
                <td>{{$pendapatan->updated_at->format('Y/m/d')}}</td>
                <td>{{$pendapatan->confirm->name_confirm}}</td>
                @if(Auth::user()->role_id != 1 )
                <td><a href="{{Route('editPendapatan',[$pendapatan->id])}}"><button  class="btn btn-primary">Edit</button></a></td>
                @endif
                @if(Auth::user()->role_id == 2 )
                <td><button  class="btn btn-primary" data-toggle="modal" data-target="#confirmasi">Konfirmasi</button></td>
                @endif
                </tr>
                @endforeach
              </tbody>
            </table>
            @if(Auth::user()->role_id == 3 )
            <div class="card-footer text-right">
              <a href="{{Route('tambahPendapatan',[Auth::user()->id])}}"><button  class="btn btn-primary">Tambah Data</button></a>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    
  </section>
    
@endsection
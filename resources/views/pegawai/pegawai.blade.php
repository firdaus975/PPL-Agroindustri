@extends('master.app')

@section('title')

Data Pegawai

@stop

@section('content')
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
                <th scope="col">Email</th>
                <th scope="col">status</th>
                <th scope="col">Aksi</th>
                
                
              </tr>
            </thead>
            <tbody>
              @foreach ($data_pegawai as $pegawai)
              <tr>
                <th scope="row">{{$pegawai->id}}</th>
                <td>{{$pegawai->name}}</td>
                <td>{{$pegawai->email}}</td>
              <td>{{$pegawai->status->name_status}}</td>
                <td><a href="/pegawai/{{$pegawai->id}}/edit"><button  class="btn btn-primary">Edit</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="card-footer text-right">
            <a href="/pegawai/buat_akun"><button  class="btn btn-primary">Tambah Data</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
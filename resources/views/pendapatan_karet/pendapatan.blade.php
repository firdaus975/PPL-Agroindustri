@extends('master.app')

@section('title')

Pendapatan

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
                  <th scope="col">Berat Bersih</th>
                  <th scope="col">Berat Kotor</th>
                  <th scope="col">Tanggal</th>
                  
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($data_pendapatan as $pendapatan)
                <tr>
                  <th scope="row">{{$pendapatan->id}}</th>
                  <td>{{$pendapatan->user->name}}</td>
                  <td>{{$pendapatan->berat_bersih}}</td>
                  <td>{{$pendapatan->berat_kotor}}</td>
                <td>{{$pendapatan->create_at->format('Ym-d')}}</td>
                  <td><a href="#"><button  class="btn btn-primary">Edit</button></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="card-footer text-right">
              <a href="{{Route('buatAkun')}}"><button  class="btn btn-primary">Tambah Data</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection
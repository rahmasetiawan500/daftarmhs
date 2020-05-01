@extends('layout.main')


@section('title', 'DAFTAR MAHASISWA')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">
               Daftar Mahasiswa
            </h1>

            <br>
            <a href="" type="button" class="btn btn-success mb-3">Tambah Data</a>

            <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
     
     @foreach( $mahasiswa as $mhs )
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{ $mhs->nama }}</td>
      <td>{{ $mhs->nrp }}</td>
      <td>{{ $mhs->email }}</td>
      <td>{{ $mhs->jurusan }}</td>
      <td>
        <a href="" type="button" class="btn btn-success">Edit</a>
        <a href="" type="button" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach



  </tbody>
</table>
        </div>
    </div>
</div>
@endsection

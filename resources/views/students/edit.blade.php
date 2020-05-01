@extends('layout.main')


@section('title', 'FORM EDIT DATA MAHASISWA')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="mt-3">
                Form Edit Data Mahasiswa
            </h1>

            <br>

            <form method="POST" action="/students/{{ $student->id }}">
            @method('patch')  
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        placeholder="Masukan Nama" name="nama" value="{{ $student->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control  @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan Nrp" name="nrp" value="{{ $student->nrp }}">
                    @error('nrp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" value="{{ $student->email }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection

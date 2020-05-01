@extends('layout.main')


@section('title', 'DAFTAR MAHASISWA')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="mt-3">
                Daftar Mahasiswa
            </h1>

            <br>
            <a href="/students/create" type="button" class="btn btn-success my-3">Tambah Data</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
             @endif
            <ul class="list-group">
                @foreach( $students as $student )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->nama }}
                    <a href="/students/{{ $student->id }}" class="badge badge-primary badge-pill">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection

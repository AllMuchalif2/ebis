@extends('layouts.main')

@section('container')
    <h1>Halaman Data Mahasiswa</h1>
    <ol>

        @foreach ($data as $mhs)
        <li>
            NIM : {{ $mhs['nim'] }} <br>
            Nama : {{ $mhs['nama'] }} <br>
            Progdi : {{ $mhs['progdi'] }} <br>
        </li>
        @endforeach
    </ol>
@endsection

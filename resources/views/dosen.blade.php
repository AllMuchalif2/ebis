@extends('layouts.main')

@section('container')
    <h1>Halaman Data Dosen</h1>
    <ol>

        @foreach ($data as $dosen)
        <li>
            NIDN : {{ $dosen['nidn'] }} <br>
            Nama : {{ $dosen['nama'] }} <br>
            Bidang Keahlian : {{ $dosen['keahlian'] }} <br>
        </li>
        @endforeach
    </ol>
@endsection

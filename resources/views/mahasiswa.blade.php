{{-- @dd($data) --}}

@extends('layouts.main')

@section('container')
    {{-- <h1>Halaman Mahasiswa</h1> --}}
    @foreach ($data as $skripsi)
        <article class="mb-4">
            <h5><a href="/mahasiswa/{{ $skripsi["slug"] }}">Judul : {{ $skripsi["title"] }}</a></h5>
            
            <h6>{{ $skripsi["nim"] }} - {{ $skripsi["nama"] }}</h6>
            <p>isi : {{ $skripsi["isi"] }}</p>
        </article>
    @endforeach
@endsection
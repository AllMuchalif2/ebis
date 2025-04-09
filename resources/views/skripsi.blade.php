{{-- @dd($skripsi) --}}

@extends('layouts.main')

@section('container')
    
        <article class="mb-4">
            <h5>{{ $skripsi['title'] }}</h5>
            <h6>{{ $skripsi['nim'] }} - {{ $skripsi['nama'] }}</h6>
            <p>{{ $skripsi['isi'] }}</p>
        </article>
   
    <a href="/mahasiswa">kembali</a>
@endsection

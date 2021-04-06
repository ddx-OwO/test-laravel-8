@extends('layouts.master')

@section('title', 'Home 1 Page')

@section('content')
    <p>Nama: {{ $nama }}</p>

    <p>Mata pelajaran: </p>
    <ul>
        @foreach($pelajaran as $p)
        <li>{{ $p }}</li>
        @endforeach
    </ul>
@stop

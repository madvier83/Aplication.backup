@extends('bab5/layouts/v_template')

@section('title', 'Guru')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Foto Guru</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guru as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nip }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->mapel }}</td>
                <td>
                    <img src="{{ asset('image/'. $data->foto) }}" width="70px" alt="{{ $data->foto }}">
                </td>
                <td>
                    <a href="/bab5/guru/{{ $data->id }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <h1>Halaman Guru</h1>
    <br>
    @foreach ($guru as $data)
        <p>NIP : {{ $data->nip }}</p>
        <p>Nama : {{ $data->nama }}</p>
        <p>Mapel : {{ $data->mapel }}</p>
        <br>
    @endforeach --}}
@endsection
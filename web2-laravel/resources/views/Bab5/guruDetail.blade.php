@extends("bab5/layouts/v_template")

@section('title', "Detail Guru")
@section('content')
<table class="table">
    <tr>
        <th width="150px">NIP</th>
        <th width="30px">:</th>
        <th>{{ $guru->nip }}</th>
    </tr>
    <tr>
        <th width="150px">NAMA GURU</th>
        <th width="30px">:</th>
        <th>{{ $guru->nama }}</th>
    </tr>
    <tr>
        <th width="150px">MATA PELAJARAN</th>
        <th width="30px">:</th>
        <th>{{ $guru->mapel }}</th>
    </tr>
    <tr>
        <th width="150px">FOTO</th>
        <th width="30px">:</th>
        <th><img src="{{ asset('image/'. $guru->foto) }}" alt=""></th>
    </tr>
    <tr>
        <th><a href="/bab5/guru" class="btn btn-success">Kembali</a></th>
    </tr>
</table>
@endsection
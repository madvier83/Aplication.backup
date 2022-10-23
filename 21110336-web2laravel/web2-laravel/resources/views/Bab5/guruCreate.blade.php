@extends("bab5/layouts/v_template")

@section("title", "Create Guru")
@section("content")
<form action="/bab5/guru" method="POST">
@csrf
<div class="content">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" value={{ old("nip") }}>
                @error("nip")<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label>NAMA GURU</label>
                <input type="text" name="nama" class="form-control" value={{ old("nama") }}>
                @error("nama")<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label>MATA PELAJARAN</label>
                <input type="text" name="mapel" class="form-control" value={{ old("mapel") }}>
                @error("mapel")<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label>FOTO GURU</label>
                <input type="file" name="foto" class="form-control" value={{ old("foto") }}>
                @error("foto")<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <button class="btn btn-sm btn-primary">SIMPAN</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
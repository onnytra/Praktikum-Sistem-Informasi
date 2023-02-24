@extends ('temp')
@section ('judul', 'Update Alternatif')

@section ('konten')

<div class="column justify-content-center ms-5 me-5">
    <h1 class="text-center mt-3">Update Bobot</h1>
    <hr>
</div>
<form action="{{ route('alternatif.update',$alternatif->id_alternatif) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$alternatif->id_alternatif}}">
    <div class="ms-5 me-5">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Nama Perusahaan</label>
            <input type="text" class="form-control form-control-lg" id="judul" name="nama_alternatif" value="{{$alternatif->nama_alternatif}}">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Ticker Perusahaan</label>
            <input type="text" class="form-control form-control-lg" id="judul" name="ticker" value="{{$alternatif->ticker}}">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>
@endsection
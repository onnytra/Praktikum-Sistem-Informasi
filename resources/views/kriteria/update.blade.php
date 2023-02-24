@extends ('temp')
@section ('judul', 'Update Kriteria')

@section ('konten')

<div class="column justify-content-center ms-5 me-5">
    <h1 class="text-center mt-3">Update Kriteria</h1>
    <hr>
</div>
<form action="{{ route('kriteria.update',$kriteria->id_kriteria) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$kriteria->id_kriteria}}">
    <div class="ms-5 me-5">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Nama Kriteria</label>
            <input type="text" class="form-control form-control-lg" id="judul" name="nama_kriteria" value="{{$kriteria->nama_kriteria}}">
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Status</label>
            <select class="form-select form-select-lg" id="genre" name="status">
                <option value="benefit">Benefit</option>
                <option value="cost">Cost</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>
@endsection
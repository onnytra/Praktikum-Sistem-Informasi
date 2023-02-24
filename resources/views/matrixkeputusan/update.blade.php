@extends ('temp')
@section ('judul', 'Update MatrixKeputusan')

@section ('konten')

<div class="column justify-content-center ms-5 me-5">
    <h1 class="text-center mt-3">Update MatrixKeputusan</h1>
    <hr>
</div>
<form action="{{ route('matrixkeputusan.update',$matrixkeputusan->id_matrix) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$matrixkeputusan->id_matrix}}">
    <div class="ms-5 me-5">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Alternatif</label>
            <input type="text" class="form-control form-control-lg" id="disabledInput" value="{{$matrixkeputusan->alternatif->nama_alternatif}}" disabled>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Kriteria</label>
            <input type="text" class="form-control form-control-lg" id="disabledInput" value="{{$matrixkeputusan->bobot->kriteria->nama_kriteria}}" disabled>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Value</label>
            <input type="text" class="form-control form-control-lg" id="judul" name="value" value="{{$matrixkeputusan->value}}">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>
@endsection
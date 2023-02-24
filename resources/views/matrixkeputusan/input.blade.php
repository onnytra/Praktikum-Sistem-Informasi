@extends ('temp')
@section ('judul', 'Input Matrixkeputusan')

@section ('konten')

<div class="column justify-content-center ms-5 me-5">
    <h1 class="text-center mt-3">Input MatrixKeputusan</h1>
    <hr>
</div>
<form action="{{ route('matrixkeputusan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="ms-5 me-5">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Alternatif</label>
            <select class="form-select form-select-lg" id="genre" name="id_alternatif">
                @foreach($alternatif as $data)
                <option value="{{ $data->id_alternatif }}">{{ $data->ticker }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Kriteria</label>
            <select class="form-select form-select-lg" id="genre" name="id_bobot">
                @foreach($bobot as $data)
                <option value="{{ $data->id_bobot }}">{{ $data->kriteria->nama_kriteria }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Value</label>
            <input type="text" class="form-control form-control-lg" id="judul" name="value">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>
@endsection
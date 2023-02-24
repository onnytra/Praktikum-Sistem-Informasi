@extends ('temp')
@section ('judul', 'Input Bobot')

@section ('konten')

<div class="column justify-content-center ms-5 me-5">
    <h1 class="text-center mt-3">Input Bobot</h1>
    <hr>
</div>
<form action="{{ route('bobot.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="ms-5 me-5">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Kriteria</label>
            <select class="form-select form-select-lg" id="genre" name="id_kriteria">
                @foreach($kriteria as $data)
                <option value="{{ $data->id_kriteria }}">{{ $data->nama_kriteria }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="col-form-label-lg">Value</label>
            <input type="text" class="form-control form-control-lg" id="judul" name="roc">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
</form>
@endsection
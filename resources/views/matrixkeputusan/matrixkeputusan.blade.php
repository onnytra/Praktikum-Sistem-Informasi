@extends ('temp')
@section ('judul', 'Matrix')

@section ('konten')
<div class="m-md-4">
    <h1>Data Matrix Keputusan</h1>
    <a href="{{ route('matrixkeputusan.create') }}" class="btn btn-info me-2">New MatrixKeputusan</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Alternatif</th>
                <th scope="col">Kriteria</th>
                <th scope="col">Value</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matrixkeputusan as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->alternatif->ticker }}</td>
                <td>{{ $data->bobot->kriteria->nama_kriteria }}</td>
                <td>{{ $data->value }}</td>
                <td>
                        <form action="{{ route('matrixkeputusan.destroy',$data->id_matrix) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('matrixkeputusan.show',$data->id_matrix) }}" class="btn btn-primary me-2">Edit</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Data Akan Dihapus')">Delete</button>
                        </form>
                </td>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
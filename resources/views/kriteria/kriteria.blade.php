@extends ('temp')
@section ('judul', 'Kriteria')

@section ('konten')
<div class="m-md-4">
    <h1>Data Kriteria</h1>
    <a href="{{ route('kriteria.create') }}" class="btn btn-info me-2">New Kriteria</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kriteria</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kriteria as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->nama_kriteria }}</td>
                <td>{{ $data->status }}</td>
                <td>
                        <form action="{{ route('kriteria.destroy',$data->id_kriteria) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('kriteria.show',$data->id_kriteria) }}" class="btn btn-primary me-2">Edit</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Data Akan Dihapus')">Delete</button>
                        </form>
                </td>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
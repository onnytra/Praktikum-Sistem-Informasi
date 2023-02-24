@extends ('temp')
@section ('judul', 'Bobot')

@section ('konten')
<div class="m-md-4">
    <h1>Data Bobot</h1>
    <a href="{{ route('bobot.create') }}" class="btn btn-info me-2">New Bobot</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kriteria</th>
                <th scope="col">Value</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bobot as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->kriteria->nama_kriteria }}</td>
                <td>{{ $data->roc }}</td>
                <td>
                        <form action="{{ route('bobot.destroy',$data->id_bobot) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('bobot.show',$data->id_bobot) }}" class="btn btn-primary me-2">Edit</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Data Akan Dihapus')">Delete</button>
                        </form>
                </td>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
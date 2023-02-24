@extends ('temp')
@section ('judul', 'Alternatif')

@section ('konten')
<div class="m-md-4">
    <h1>Data Alternatif</h1>
    <a href="{{ route('alternatif.create') }}" class="btn btn-info me-2">New Alternatif</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Ticker Perusahaan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alternatif as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->nama_alternatif }}</td>
                <td>{{ $data->ticker }}</td>
                <td>
                        <form action="{{ route('alternatif.destroy',$data->id_alternatif) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <a href="{{ route('alternatif.show',$data->id_alternatif) }}" class="btn btn-primary me-2">Edit</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Data Akan Dihapus')">Delete</button>
                        </form>
                </td>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
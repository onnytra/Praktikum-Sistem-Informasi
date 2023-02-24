@extends ('temp')
@section ('judul', 'VMatrix')

@section ('konten')
<div class="m-md-4">
    <h1>View Normalisasi</h1>
    <table class="table" id="example">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Alternatif</th>
                <th scope="col">Kriteria</th>
                <th scope="col">Status</th>
                <th scope="col">Value</th>
                <th scope="col">Normalisasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($normalisasi as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->nama_alternatif }}</td>
                <td>{{ $data->nama_kriteria }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->value }}</td>
                <td>{{ $data->normalisasi }}</td>
                @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection
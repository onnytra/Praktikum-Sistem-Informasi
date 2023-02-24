@extends ('temp')
@section ('judul', 'VMatrix')

@section ('konten')
<div class="m-md-4">
    <h1>View Max</h1>
    <table class="table" id="example">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kriteria</th>
                <th scope="col">Max</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($max as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->nama_kriteria }}</td>
                <td>{{ $data->maksimum }}</td>
                @endforeach
        </tbody>
    </table>
</div>
<div class="m-md-4">
    <h1>View Min</h1>
    <table class="table" id="example">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kriteria</th>
                <th scope="col">Min</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($min as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->nama_kriteria }}</td>
                <td>{{ $data->minimum }}</td>
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
@extends ('temp')
@section ('judul', 'VMatrix')

@section ('konten')
<div class="m-md-4">
    <h1>View Rank</h1>
    <table class="table" id="example">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Alternatif</th>
                <th scope="col">Rangking</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rank as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->nama_alternatif }}</td>
                <td>{{ $data->rangking }}</td>
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
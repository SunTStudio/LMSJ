@extends('layout.main')
@section('title','Sub Mata Pelajaran')
@section('content')
    <div class="card">
        <div class="card-header">
            <p class="m-0 p-0"><strong>Sub Mata Pelajaran</strong></p>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="datatable">
                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Sub Mata Pelajaran</th>
                        <th>Kode</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subMataPelajaran as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="{{ route('admin.sub_mata_pelajaran.show', $item->id) }}"
                                    class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ route('admin.sub_mata_pelajaran.edit', $item->id) }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.sub_mata_pelajaran.destroy', $item->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger btn-delete">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                responsive: true,
                autoWidth: false,
                scrollX: true,
                columnDefs: [{
                    targets: 0,
                    className: 'dt-body-center'
                }]
            });
        });
    </script>
@endsection
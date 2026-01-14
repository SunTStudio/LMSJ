@extends('layout.main')
@section('title', 'Mata Pelajaran')
@section('content')
    <div class="card">
        <div class="card-header">
            <p class="m-0 p-0"><strong>Mata Pelajaran</strong></p>
        </div>
        <div class="card-body">
            {{-- tambah --}}
            <a href="{{ route('admin.mata_pelajaran.create') }}" class="btn btn-primary mb-3 btn-sm">Tambah Mata Pelajaran</a>
            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mata Pelajaran</th>
                        <th>Kode Mata Pelajaran</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mataPelajaran as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <a href="{{ route('admin.mata_pelajaran.show', $item->id) }}"
                                    class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ route('admin.mata_pelajaran.edit', $item->id) }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.mata_pelajaran.destroy', $item->id) }}" method="POST"
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

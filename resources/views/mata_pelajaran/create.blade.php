@extends('layout.main')
@section('title','Mata Pelajaran Baru')
@section('content')
<div class="card">
    <div class="card-header">
        <p class="m-0 p-0"><strong>Mata Pelajaran Baru</strong></p>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.mata_pelajaran.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mata Pelajaran</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            {{-- kode --}}
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Mata Pelajaran</label>
                <input type="text" class="form-control" id="kode" name="kode" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            {{-- kembali --}}
            <a href="{{ route('admin.mata_pelajaran') }}" class="btn btn-secondary mb-3 btn-sm">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
@section('script')
@endsection
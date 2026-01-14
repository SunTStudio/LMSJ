@extends('layout.main')
@section('title','Edit Mata Pelajaran')
@section('content')

<div class="card">
    <div class="card-header">
        <p class="m-0 p-0"><strong>Edit Mata Pelajaran</strong></p>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.mata_pelajaran.update', $pelajaran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mata Pelajaran</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $pelajaran->nama }}" required>
            </div>
            {{-- kode --}}
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Mata Pelajaran</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ $pelajaran->kode }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $pelajaran->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
    </div>
</div>
@endsection
@section('script')
@endsection
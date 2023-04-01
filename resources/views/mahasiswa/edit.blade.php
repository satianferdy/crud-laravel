@extends('layouts.app')

@section('title', 'Edit Data Mahasiswa')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Mahasiswa</h1>
        </div>

        <div class="section-body">
            <div class="container mt-5">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-dark mb-2">Back</a>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" class="form-control" name="nim" value="{{ $mahasiswa->nim }}"
                                    id="nim">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Name</label>
                                <input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}"
                                    id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Department</label>
                                <input type="text" class="form-control" name="jurusan" value="{{ $mahasiswa->jurusan }}"
                                    id="jurusan">
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('sidebar')

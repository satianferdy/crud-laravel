@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Mahasiswa</h1>
        </div>

        <div class="section-body">
            <div class="container mt-3">
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-dark mb-2">Add Data</a>
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>NO</th>
                                <th>NIM</th>
                                <th>NAME</th>
                                <th>DEPARTMENT</th>
                                <th>ACTION</th>
                            </thead>
                            <tbody>
                                @if ($mahasiswa->count() > 0)
                                    @foreach ($mahasiswa as $no => $hasil)
                                        <tr>
                                            <th>{{ $no + 1 }}</th>
                                            <td>{{ $hasil->nim }}</td>
                                            <td>{{ $hasil->nama }}</td>
                                            <td>{{ $hasil->jurusan }}</td>
                                            <td>
                                                <form action="{{ route('mahasiswa.destroy', $hasil->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('mahasiswa.edit', $hasil->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">No Data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('sidebar')

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Karyawan</h1>
       
        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST" id="updateForm">
            @csrf
            @method('PATCH')

            @if ($errors->any())
                <div class="alert alert-danger" role="alert" aria-live="assertive">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $karyawan->nama) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" value="{{ old('jabatan', $karyawan->jabatan) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="gaji">Gaji</label>
                        <input type="number" name="gaji" id="gaji" class="form-control" value="{{ old('gaji', $karyawan->gaji) }}" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>           
        </form>
    </div>
@endsection

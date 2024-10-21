@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-center">Tambah Karyawan</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="waktu_masuk">Waktu Masuk</label>
                    <input type="time" name="waktu_masuk" id="waktu_masuk" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="waktu_keluar">Waktu Keluar</label>
                    <input type="time" name="waktu_keluar" id="waktu_keluar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="gaji">Gaji</label>
                    <input type="number" name="gaji" id="gaji" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
@endsection


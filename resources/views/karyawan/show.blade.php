@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Detail Karyawan</h1>
            <table class="table">
              <h5 class="card-title">Informasi Karyawan</h5>
                <tr>
                    <th>ID :</th>
                    <td>{{ $karyawan->id }}</td>
                </tr>
                <tr>
                    <th>Nama:</th>
                    <td> {{ $karyawan->nama }}</td>
                </tr>
                <tr>
                    <th>Jabatan:</th>
                    <td>{{ $karyawan->jabatan }}</td>
                </tr>
                <tr>
                    <th>Tanggal Masuk:</th>
                    <td>{{ $karyawan->tanggal_masuk }}</td>
                </tr>
                <tr>
                    <th>Waktu Masuk:</th>
                    <td>{{ $karyawan->waktu_masuk }}</td>
                </tr>
                <tr>
                    <th>Waktu Keluar:</th>
                    <td>{{ $karyawan->waktu_keluar }}</td>
                </tr>
                <tr>
                    <th>Gaji:</th>
                    <td>{{ number_format($karyawan->gaji, 2, ',', '.') }} IDR</td>
                </tr>
            </table>
        <div class="mt-3">
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection



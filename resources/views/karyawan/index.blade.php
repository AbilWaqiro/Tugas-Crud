@extends('layouts.app')

@section('content')
    <h1>Daftar Karyawan</h1>

    <form action="#" method="GET" class="d-flex">
        <input type="text" name="search" class="form-control me-2" placeholder="Cari karyawan..." aria-label="Search">
        <button type="submit" class="btn btn-secondary ml-2">Cari</button>
    </form>     
    
    @if(Session::get('success'))
        <div class="alert alert-success mt-2">{{ Session::get('success') }}</div>
    @endif

    @if (Session::get('deleted'))
        <div class="alert alert-warning mt-2">{{ Session::get('deleted')}}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tanggal Masuk</th>
                <th>Waktu Masuk</th>
                <th>Waktu Keluar</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->id }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>{{ $karyawan->tanggal_masuk }}</td>
                    <td>{{ $karyawan->waktu_masuk }}</td>
                    <td>{{ $karyawan->waktu_keluar }}</td>
                    <td>{{ $karyawan->gaji }}</td>
                    <td>
                        <a href="{{ route('karyawan.show', $karyawan->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning">Edit</a>                        
                        
                        <form action="{{ route('karyawan.delete', $karyawan->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $karyawans->links() }} <!-- Menampilkan pagination -->
    </div>
@endsection

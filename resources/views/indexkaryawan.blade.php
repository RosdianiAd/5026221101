@extends('template')

@section('tulisan1', 'Data Karyawan')

@section('link1')
    <a href="/karyawan/tambahKaryawan" class="btn btn-primary"> + Tambah Data</a>
@endsection

@section('konten')
    <div class="container">
    <h1>Data Karyawan</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr style="text-align: center;">
                <th>Nama</th>
                <th>NIP</th>
                <th>Pangkat</th>
                <th>Gaji</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan1 as $k)
                <tr style="text-align: center;">
                    <td>{{ $k->Nama}}</td>
                    <td>{{ $k->NIP}}</td>
                    <td>{{ $k->Pangkat}}</td>
                    <td align="right">{{ number_format($k->Gaji, 0, ',', '.') }}</td>
                    <td>
                        <a href="/karyawan/hapus/{{$k->NIP}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br/>
@endsection

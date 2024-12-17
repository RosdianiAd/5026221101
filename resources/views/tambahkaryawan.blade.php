@extends('template')

@section('tulisan1','Data Karyawan')

@section('link1')
	<a href="/karyawan">Kembali</a>
@endsection

@section('konten')
	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
        <h1>Tambah Data</h1>

        <div class="row mb-3">
            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="Nama" class= "form-control" id="Nama" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
              <input type="text" name="NIP" class= "form-control" id="NIP" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <label for="Pangkat" class="col-sm-2 col-form-label">Pangkat</label>
            <div class="col-sm-10">
              <input type="text" name="Pangkat" class= "form-control" id="Pangkat" required="required">
            </div>
          </div>

        <div class="row mb-3">
            <label for="Gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-10">
                <input type="text" name="Gaji" class= "form-control" id="Gaji" required="required">
            </div>
          </div>
        <div class="row mb-3">
            <div class="col-sm-12">
		        <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
        </div>
	</form>
@endsection

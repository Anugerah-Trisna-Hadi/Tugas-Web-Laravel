@extends('master.master')
@section('title','Tambah Data Siswa - Anugerah Web')
@section('content')
<section>
	<div class="container">
		<div class="col-md mt-5">
			<h1 class="text-center">Tambah Data Siswa</h1>
		</div>
		<form action="/DataSiswa" method="post">
		@csrf
  <div class="form-group">
    <label for="nama_siswa">Masukan Nama Siswa</label>
    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa"  value="{{ @old('nama_siswa') }}" >
    @error('nama_siswa')
    <p class="small text-danger">{{ $message }}</p>
    @enderror
	</div>
  <div class="form-group">
    <label for="kelas">Kelas</label>
    <select class="form-control select" id="kelas" name="kelas" >
        <option></option>
        <option value="10 RPL 1">10 RPL 1</option>
        <option value="10 RPL 2">10 RPL 2</option>
        <option value="10 TKJ 1">10 TKJ 1</option>
        <option value="10 TKJ 2">10 TKJ 2</option>
        <option value="10 APH 1">10 APH 1</option>
        <option value="10 APH 2">10 APH 2</option>
        <option value="10 DKV 1">10 DKV 1</option>
        <option value="10 DKV 2">10 DKV 2</option>
        <option value="10 PSPT 1">10 PSPT 1</option>
        <option value="10 PSPT 2">10 PSPT 2</option>
        <option value="10 MM 1">10 MM 1</option>
        <option value="10 MM 2">10 MM 2</option>
        <option value="10 BDPM 1">10 BDPM 1</option>
        <option value="10 BDPM 2">10 BDPM 2</option>
        <option value="10 OTKP 1">10 OTKP 1</option>
        <option value="10 OTKP 2">10 OTKP 2</option>
        <option value="10 OTKP 3">10 OTKP 3</option>
        <option value="10 OTKP 4">10 OTKP 4</option>
        <option value="10 OTKP 5">10 OTKP 5</option>
        <option value="10 AKL 1">10 AKL 1</option>
        <option value="10 AKL 2">10 AKL 2</option>
        <option value="10 AKL 3">10 AKL 3</option>
        <option value="10 AKL 4">10 AKL 4</option>
        <option value="10 AKL 5">10 AKL 5</option>
        <option value="11 RPL 1">11 RPL 1</option>
        <option value="11 RPL 2">11 RPL 2</option>
        <option value="11 TKJ 1">11 TKJ 1</option>
        <option value="11 TKJ 2">11 TKJ 2</option>
        <option value="11 APH 1">11 APH 1</option>
        <option value="11 APH 2">11 APH 2</option>
        <option value="11 DKV 1">11 DKV 1</option>
        <option value="11 DKV 2">11 DKV 2</option>
        <option value="11 PSPT 1">11 PSPT 1</option>
        <option value="11 PSPT 2">11 PSPT 2</option>
        <option value="11 MM 1">11 MM 1</option>
        <option value="11 MM 2">11 MM 2</option>
        <option value="11 BDPM 1">11 BDPM 1</option>
        <option value="11 BDPM 2">11 BDPM 2</option>
        <option value="11 OTKP 1">11 OTKP 1</option>
        <option value="11 OTKP 2">11 OTKP 2</option>
        <option value="11 OTKP 3">11 OTKP 3</option>
        <option value="11 OTKP 4">11 OTKP 4</option>
        <option value="11 OTKP 5">11 OTKP 5</option>
        <option value="11 AKL 1">11 AKL 1</option>
        <option value="11 AKL 2">11 AKL 2</option>
        <option value="11 AKL 3">11 AKL 3</option>
        <option value="11 AKL 4">11 AKL 4</option>
        <option value="11 AKL 5">11 AKL 5</option>
        <option value="12 RPL 1">12 RPL 1</option>
        <option value="12 RPL 2">12 RPL 2</option>
        <option value="12 TKJ 1">12 TKJ 1</option>
        <option value="12 TKJ 2">12 TKJ 2</option>
        <option value="12 APH 1">12 APH 1</option>
        <option value="12 APH 2">12 APH 2</option>
        <option value="12 DKV 1">12 DKV 1</option>
        <option value="12 DKV 2">12 DKV 2</option>
        <option value="12 PSPT 1">12 PSPT 1</option>
        <option value="12 PSPT 2">12 PSPT 2</option>
        <option value="12 MM 1">12 MM 1</option>
        <option value="12 MM 2">12 MM 2</option>
        <option value="12 BDPM 1">12 BDPM 1</option>
        <option value="12 BDPM 2">12 BDPM 2</option>
        <option value="12 OTKP 1">12 OTKP 1</option>
        <option value="12 OTKP 2">12 OTKP 2</option>
        <option value="12 OTKP 3">12 OTKP 3</option>
        <option value="12 OTKP 4">12 OTKP 4</option>
        <option value="12 OTKP 5">12 OTKP 5</option>
        <option value="12 AKL 1">12 AKL 1</option>
        <option value="12 AKL 2">12 AKL 2</option>
        <option value="12 AKL 3">12 AKL 3</option>
        <option value="12 AKL 4">12 AKL 4</option>
        <option value="12 AKL 5">12 AKL 5</option>
    </select>
    @error('kelas')
    <p class="small text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="umur_siswa">Umur</label>
    <input type="number" class="form-control" id="umur_siswa" name="umur_siswa" value="{{ @old('umur_siswa') }}" >
    @error('umur_siswa')
    <p class="small text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ @old('alamat') }}" >
    @error('alamat')
    <p class="small text-danger">{{ $message }}</p>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-secondary">Reset</button>
</form>
	</div>
</section>

@endsection



@extends('master.master')
@section('title','Edit Data Siswa - Anugerah Web')
@section('content')
<section>
	<div class="container">
		<div class="col-md mt-5">
			<h1 class="text-center">Edit Data Siswa</h1>
		</div>
		<form action="{{ route('DataSiswa.update', $siswa->id) }}" method="post">
		@csrf
        @method('PUT')
  <div class="form-group">
    <input type="text" name="id" value="{{$siswa->id}}" hidden>
    <label for="nama_siswa">Masukan Nama Siswa</label>
    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required="required">
	</div>
  <div class="form-group">
    <label for="kelas">Kelas</label>
    <select class="form-control select" id="kelas" name="kelas" required="required">
        <option></option>
        <option value="10 RPL 1" <?php if($siswa->kelas == "10 RPL 1") {echo "selected=''";} ?>>10 RPL 1</option>
        <option value="10 RPL 2" <?php if($siswa->kelas == "10 RPL 2") {echo "selected=''";} ?>>10 RPL 2</option>
        <option value="10 TKJ 1" <?php if($siswa->kelas == "10 TKJ 1") {echo "selected=''";} ?>>10 TKJ 1</option>
        <option value="10 TKJ 2" <?php if($siswa->kelas == "10 TKJ 2") {echo "selected=''";} ?>>10 TKJ 2</option>
        <option value="10 APH 1" <?php if($siswa->kelas == "10 APH 1") {echo "selected=''";} ?>>10 APH 1</option>
        <option value="10 APH 2" <?php if($siswa->kelas == "10 APH 2") {echo "selected=''";} ?>>10 APH 2</option>
        <option value="10 DKV 1" <?php if($siswa->kelas == "10 DKV 1") {echo "selected=''";} ?>>10 DKV 1</option>
        <option value="10 DKV 2" <?php if($siswa->kelas == "10 DKV 2") {echo "selected=''";} ?>>10 DKV 2</option>
        <option value="10 PSPT 1" <?php if($siswa->kelas == "10 PSPT 1") {echo "selected=''";} ?>>10 PSPT 1</option>
        <option value="10 PSPT 2" <?php if($siswa->kelas == "10 PSPT 2") {echo "selected=''";} ?>>10 PSPT 2</option>
        <option value="10 MM 1" <?php if($siswa->kelas == "10 MM 1") {echo "selected=''";} ?>>10 MM 1</option>
        <option value="10 MM 2" <?php if($siswa->kelas == "10 MM 2") {echo "selected=''";} ?>>10 MM 2</option>
        <option value="10 BDPM 1" <?php if($siswa->kelas == "10 BDPM 1") {echo "selected=''";} ?>>10 BDPM 1</option>
        <option value="10 BDPM 2" <?php if($siswa->kelas == "10 BDPM 2") {echo "selected=''";} ?>>10 BDPM 2</option>
        <option value="10 OTKP 1" <?php if($siswa->kelas == "10 OTKP 1") {echo "selected=''";} ?>>10 OTKP 1</option>
        <option value="10 OTKP 2" <?php if($siswa->kelas == "10 OTKP 2") {echo "selected=''";} ?>>10 OTKP 2</option>
        <option value="10 OTKP 3" <?php if($siswa->kelas == "10 OTKP 3") {echo "selected=''";} ?>>10 OTKP 3</option>
        <option value="10 OTKP 4" <?php if($siswa->kelas == "10 OTKP 4") {echo "selected=''";} ?>>10 OTKP 4</option>
        <option value="10 OTKP 5" <?php if($siswa->kelas == "10 OTKP 5") {echo "selected=''";} ?>>10 OTKP 5</option>
        <option value="10 AKL 1" <?php if($siswa->kelas == "10 AKL 1") {echo "selected=''";} ?>>10 AKL 1</option>
        <option value="10 AKL 2" <?php if($siswa->kelas == "10 AKL 2") {echo "selected=''";} ?>>10 AKL 2</option>
        <option value="10 AKL 3" <?php if($siswa->kelas == "10 AKL 3") {echo "selected=''";} ?>>10 AKL 3</option>
        <option value="10 AKL 4" <?php if($siswa->kelas == "10 AKL 4") {echo "selected=''";} ?>>10 AKL 4</option>
        <option value="10 AKL 5" <?php if($siswa->kelas == "10 AKL 5") {echo "selected=''";} ?>>10 AKL 5</option>
        <option value="11 RPL 1" <?php if($siswa->kelas == "11 RPL 1") {echo "selected=''";} ?>>11 RPL 1</option>
        <option value="11 RPL 2" <?php if($siswa->kelas == "11 RPL 2") {echo "selected=''";} ?>>11 RPL 2</option>
        <option value="11 TKJ 1" <?php if($siswa->kelas == "11 TKJ 1") {echo "selected=''";} ?>>11 TKJ 1</option>
        <option value="11 TKJ 2" <?php if($siswa->kelas == "11 TKJ 2") {echo "selected=''";} ?>>11 TKJ 2</option>
        <option value="11 APH 1" <?php if($siswa->kelas == "11 APH 1") {echo "selected=''";} ?>>11 APH 1</option>
        <option value="11 APH 2" <?php if($siswa->kelas == "11 APH 2") {echo "selected=''";} ?>>11 APH 2</option>
        <option value="11 DKV 1" <?php if($siswa->kelas == "11 DKV 1") {echo "selected=''";} ?>>11 DKV 1</option>
        <option value="11 DKV 2" <?php if($siswa->kelas == "11 DKV 2") {echo "selected=''";} ?>>11 DKV 2</option>
        <option value="11 PSPT 1" <?php if($siswa->kelas == "11 PSPT 1") {echo "selected=''";} ?>>11 PSPT 1</option>
        <option value="11 PSPT 2" <?php if($siswa->kelas == "11 PSPT 2") {echo "selected=''";} ?>>11 PSPT 2</option>
        <option value="11 MM 1" <?php if($siswa->kelas == "11 MM 1") {echo "selected=''";} ?>>11 MM 1</option>
        <option value="11 MM 2" <?php if($siswa->kelas == "11 MM 2") {echo "selected=''";} ?>>11 MM 2</option>
        <option value="11 BDPM 1" <?php if($siswa->kelas == "11 BDPM 1") {echo "selected=''";} ?>>11 BDPM 1</option>
        <option value="11 BDPM 2" <?php if($siswa->kelas == "11 BDPM 2") {echo "selected=''";} ?>>11 BDPM 2</option>
        <option value="11 OTKP 1" <?php if($siswa->kelas == "11 OTKP 1") {echo "selected=''";} ?>>11 OTKP 1</option>
        <option value="11 OTKP 2" <?php if($siswa->kelas == "11 OTKP 2") {echo "selected=''";} ?>>11 OTKP 2</option>
        <option value="11 OTKP 3" <?php if($siswa->kelas == "11 OTKP 3") {echo "selected=''";} ?>>11 OTKP 3</option>
        <option value="11 OTKP 4" <?php if($siswa->kelas == "11 OTKP 4") {echo "selected=''";} ?>>11 OTKP 4</option>
        <option value="11 OTKP 5" <?php if($siswa->kelas == "11 OTKP 5") {echo "selected=''";} ?>>11 OTKP 5</option>
        <option value="11 AKL 1" <?php if($siswa->kelas == "11 AKL 1") {echo "selected=''";} ?>>11 AKL 1</option>
        <option value="11 AKL 2" <?php if($siswa->kelas == "11 AKL 2") {echo "selected=''";} ?>>11 AKL 2</option>
        <option value="11 AKL 3" <?php if($siswa->kelas == "11 AKL 3") {echo "selected=''";} ?>>11 AKL 3</option>
        <option value="11 AKL 4" <?php if($siswa->kelas == "11 AKL 4") {echo "selected=''";} ?>>11 AKL 4</option>
        <option value="11 AKL 5" <?php if($siswa->kelas == "11 AKL 5") {echo "selected=''";} ?>>11 AKL 5</option>
        <option value="12 RPL 1" <?php if($siswa->kelas == "12 RPL 1") {echo "selected=''";} ?>>12 RPL 1</option>
        <option value="12 RPL 2" <?php if($siswa->kelas == "12 RPL 2") {echo "selected=''";} ?>>12 RPL 2</option>
        <option value="12 TKJ 1" <?php if($siswa->kelas == "12 TKJ 1") {echo "selected=''";} ?>>12 TKJ 1</option>
        <option value="12 TKJ 2" <?php if($siswa->kelas == "12 TKJ 2") {echo "selected=''";} ?>>12 TKJ 2</option>
        <option value="12 APH 1" <?php if($siswa->kelas == "12 APH 1") {echo "selected=''";} ?>>12 APH 1</option>
        <option value="12 APH 2" <?php if($siswa->kelas == "12 APH 2") {echo "selected=''";} ?>>12 APH 2</option>
        <option value="12 DKV 1" <?php if($siswa->kelas == "12 DKV 1") {echo "selected=''";} ?>>12 DKV 1</option>
        <option value="12 DKV 2" <?php if($siswa->kelas == "12 DKV 2") {echo "selected=''";} ?>>12 DKV 2</option>
        <option value="12 PSPT 1" <?php if($siswa->kelas == "12 PSPT 1") {echo "selected=''";} ?>>12 PSPT 1</option>
        <option value="12 PSPT 2" <?php if($siswa->kelas == "12 PSPT 2") {echo "selected=''";} ?>>12 PSPT 2</option>
        <option value="12 MM 1" <?php if($siswa->kelas == "12 MM 1") {echo "selected=''";} ?>>12 MM 1</option>
        <option value="12 MM 2" <?php if($siswa->kelas == "12 MM 2") {echo "selected=''";} ?>>12 MM 2</option>
        <option value="12 BDPM 1" <?php if($siswa->kelas == "12 BDPM 1") {echo "selected=''";} ?>>12 BDPM 1</option>
        <option value="12 BDPM 2" <?php if($siswa->kelas == "12 BDPM 2") {echo "selected=''";} ?>>12 BDPM 2</option>
        <option value="12 OTKP 1" <?php if($siswa->kelas == "12 OTKP 1") {echo "selected=''";} ?>>12 OTKP 1</option>
        <option value="12 OTKP 2" <?php if($siswa->kelas == "12 OTKP 2") {echo "selected=''";} ?>>12 OTKP 2</option>
        <option value="12 OTKP 3" <?php if($siswa->kelas == "12 OTKP 3") {echo "selected=''";} ?>>12 OTKP 3</option>
        <option value="12 OTKP 4" <?php if($siswa->kelas == "12 OTKP 4") {echo "selected=''";} ?>>12 OTKP 4</option>
        <option value="12 OTKP 5" <?php if($siswa->kelas == "12 OTKP 5") {echo "selected=''";} ?>>12 OTKP 5</option>
        <option value="12 AKL 1" <?php if($siswa->kelas == "12 AKL 1") {echo "selected=''";} ?>>12 AKL 1</option>
        <option value="12 AKL 2" <?php if($siswa->kelas == "12 AKL 2") {echo "selected=''";} ?>>12 AKL 2</option>
        <option value="12 AKL 3" <?php if($siswa->kelas == "12 AKL 3") {echo "selected=''";} ?>>12 AKL 3</option>
        <option value="12 AKL 4" <?php if($siswa->kelas == "12 AKL 4") {echo "selected=''";} ?>>12 AKL 4</option>
        <option value="12 AKL 5" <?php if($siswa->kelas == "12 AKL 5") {echo "selected=''";} ?>>12 AKL 5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="umur_siswa">Umur</label>
    <input type="number" class="form-control" id="umur_siswa" name="umur_siswa" value="{{ $siswa->umur_siswa }}" required="required">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $siswa->alamat }}" required="required">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
</section>

@endsection



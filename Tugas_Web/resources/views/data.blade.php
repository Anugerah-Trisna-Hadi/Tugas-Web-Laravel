	@extends('master.master')
	@section('title','Data Siswa - Anugerah Web')
	@section('content')
	<section>
		<div class="container">
			<div class="col-md mt-5">
				<h1 class="text-center">Data Siswa</h1>
			</div>
			<a href="/DataSiswa/create"><button type="button" class="btn btn-primary">Tambah Data Siswa</button></a>
			<table class="table table-hover mt-3">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>Nama</th>
						<th class="text-center">Kelas</th>
						<th class="text-center">Umur</th>
						<th>Alamat</th>
						<th class="text-center">Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($siswa as $s)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $s->nama_siswa }}</td>
						<td class="text-center">{{ $s->kelas }}</td>
						<td class="text-center">{{ $s->umur_siswa }}</td>
						<td>{{ $s->alamat }}</td>
						<td class="text-center">
							<form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('DataSiswa.destroy', $s->id) }}" method="POST">
								<a href="{{ route('DataSiswa.edit', $s->id) }}" class="btn btn-sm btn-warning">Edit</a> | 
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-sm btn-danger">Hapus</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
	@endsection
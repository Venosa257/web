@extends('master.siswa.admin')
@section('container')

<h1>Tambah Data</h1>

<form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
@csrf

<label for="name">Nama</label>
<input class="form-control mb-3" type="text" name="name" placeholder="Nama">

<label for="about">Tentang</label>
<input class="form-control mb-3" type="text" name="about" placeholder="Tentang">

<label for="file" class="form-label">Foto</label>
<input class="form-control" type="file" name="photo" id="file">

<button type="submit" class="btn btn-primary mt-3 mb-3">Submit</button>
</form>


@endsection

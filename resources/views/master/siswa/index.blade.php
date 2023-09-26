@extends('master.siswa.admin')
@section('container')
<a href="/siswa/create" type="button" class="btn btn-primary mb-4">Tambah Data</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Name</th>
      <th scope="col">About</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($siswa as $s)
        
    <tr>
      <th scope="row">1</th>
      <td><img src="{{ asset('storage\\' . $s->p)  }}" alt="{{ $s->name }}"></td>
      <td>{{ $s->name }}</td>
      <td>{{ $s->about }}</td>
      <td>
        <a href="" class="btn btn-warning">Edit</a>
         <form action="{{ route('siswa.destroy', $s->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-datatable btn-icon btn-transparent-dark" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection

@extends('mahasiswa.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <!-- menambah 3 kolom pada view index -->
        <th>Email</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs ->nim }}</td>
        <td>{{ $mhs ->nama }}</td>
        <td>{{ $mhs ->kelas }}</td>
        <td>{{ $mhs ->jurusan }}</td>
        <td>{{ $mhs ->email }}</td>
        <td>{{ $mhs ->alamat }}</td>
        <td>{{ Carbon\Carbon::parse($mhs ->tanggal_lahir)->format('d-m-Y') }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<!-- {{$mahasiswa->links()}} -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <!-- <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li> -->
    {{$mahasiswa->links()}}
    <!-- <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li> -->
  </ul>
</nav>
@endsection
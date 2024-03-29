@extends('mahasiswa.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2 href=>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
            <div class="float-right">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        <form class="form" method="get" action="{{ route('search') }}">
            <div class="form-group w-100 mb-3">
        <!-- <label for="search" class="d-block mr-2"><b>Pencarian</b></label> -->
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan Kata kunci yang akan dicari">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
</form>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<!-- menambahkan pemilihan -->
@if ($mahasiswa->count())
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
            <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda Yakin Menghapus Data Mahasiswa?')">
                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    @else
    <p class="text-center fs-4">Mahasiswa tidak ditemukan.</p>
@endif

</table>
<!-- {{$mahasiswa->links()}} -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
  <a class="btn btn-success" href="{{ route('mahasiswa.index') }}"> Beranda</a>
    {{$mahasiswa->links()}}
  </ul>
</nav>
@endsection
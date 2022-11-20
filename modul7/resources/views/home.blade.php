@extends('main')

@section('body')
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <h3>Tabel Data Mahasiswa</h3>
      </div>
    </nav>

    <table class="table table-striped text-center" style="width: 99%; background-color: white">
    <thead>
      <tr>
        <th colspan="2" scope="col" width="16.5%">Aksi</th>
        <th scope="col" width="16.5%">NO</th>
        <th scope="col" width="16.5%">NRP</th>
        <th scope="col" width="16.5%">Nama</th>
        <th scope="col" width="16.5%">Email</th>
        <th scope="col" width="16.5%">Alamat</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($mahasiswaa as $mahasiswaa)
      <tr>
        <td width="8.25%">
          <!--HAPUS-->
          <form  method="POST" action="/hapus/{{ $mahasiswaa->nim }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </form>
        </td>
        <td width="8.25%">
          <!--EDIT-->
          <a href="/tampil/{{$mahasiswaa->nim}}" style="text-decoration: none;">
            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
          </a>
        </td>
        <td width="16.5%">{{ $mahasiswaa->no }}</td>
        <td width="16.5%">{{ $mahasiswaa->nim }}</td>
        <td width="16.5%">{{ $mahasiswaa->nama }}</td>
        <td width="16.5%">{{ $mahasiswaa->email }}</td>
        <td width="16.5%">{{ $mahasiswaa->alamat }}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
@endsection
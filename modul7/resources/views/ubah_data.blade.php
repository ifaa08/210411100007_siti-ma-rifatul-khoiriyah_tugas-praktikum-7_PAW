@extends('main')

@section('body')
    <div class="container mt-3">
    <h2>Mengubah Data</h2>
    <p>Silahkan ubah data dibawah ini:</p>
    <form method="post" action="/ubah/{{$mahasiswaa->nim}}">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3 mt-3">
            <input value="{{$mahasiswaa->nim}}" type="number" class="form-control input-color" id="no" placeholder="Masukkan NO" name="no" value="" required>
            <label for="no">No</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input value="{{$mahasiswaa->nim}}" type="number" class="form-control input-color" id="nim" placeholder="Masukkan NRP" name="nim" value="" required>
            <label for="nim">NRP</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input value="{{$mahasiswaa->nama}}" type="text" class="form-control input-color" id="nama" placeholder="Masukkan Nama" name="nama" value="" required>
            <label for="nama">Nama</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input value="{{$mahasiswaa->email}}" type="email" class="form-control input-color" id="email" placeholder="Masukkan Email" name="email" value="" required>
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input value="{{$mahasiswaa->alamat}}" type="text" class="form-control input-color" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="" required>
            <label for="alamat">Alamat</label>
        </div>
          <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
        </form>
    </div>
@endsection

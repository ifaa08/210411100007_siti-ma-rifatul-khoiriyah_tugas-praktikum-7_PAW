@extends('main')

@section('body')
      <div class="container mt-3">
        <h2>Menambahkan Data</h2>
        <p>Silahkan masukkan data dibawah ini:</p>
        <form method="post" action="/tambah">
          @csrf
          <div class="form-floating mb-3 mt-3">
            <input type="number" class="form-control input-color" id="no" placeholder="Masukkan No" name="no" required>
            <label for="no">No</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="number" class="form-control input-color" id="nim" placeholder="Masukkan NIM" name="nim" required>
            <label for="nim">NRP</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="nama" placeholder="Masukkan Nama" name="nama" required>
            <label for="nama">Nama</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="email" class="form-control input-color" id="email" placeholder="Masukkan Email" name="email" required>
            <label for="email">Email</label>
          </div>
          <div class="form-floating mb-3 mt-3">
            <input type="text" class="form-control input-color" id="alamat" placeholder="Masukkan Alamat" name="alamat" required>
            <label for="alamat">Alamat</label>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
        </form>
      </div>
@endsection

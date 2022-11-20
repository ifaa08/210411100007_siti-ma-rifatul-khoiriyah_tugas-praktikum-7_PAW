<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/719f1245a0.js" crossorigin="anonymous"></script>
    <link rel="icon" href="logo.png" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>{{ $title }}</title>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark fw-bolder sticky-top">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="/">Simple Siakad</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="navbar-item">
                <a href="/" class="nav-link active">Data MHS</a>
            </li>
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <li class="navbar-item">
                <a href="/tambah_data" class="nav-link active">Input</a>
            </li>
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <li class="navbar-item">
                <a href="/about" class="nav-link active">About Me</a>
            </li>
        </ul>
      </div>
    </nav>
    <!--Tabel-->
    <div class="container mt-3" id="beranda">
        @yield('body')
    </div>
    <!--Footer-->
    <!--Bagian Footer-->
    <div class="mt-4\">
      <footer class=" bg-primary text-white ">
        <!-- Grid container -->
        <div class="container p-2">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h6 class="text-uppercase"><img src="logo.png" alt="" width="60px" /></h6>
              <ul class="list-unstyled mb-0">
                <li class="text-white garis-bawah">Jurusan Teknik Informatika</li>
                <li class="text-white garis-bawah">Universitas Trunojoyo Madura</li>
                <li class="text-white garis-bawah">Jl. Raya Telang, Kec.Kamal,Kab.Bangkalan</li>
                <li class="text-white garis-bawah">69162 Indonesia</li>
                <li class="text-white garis-bawah">Kampus Universitas Trunojoyo Madura</li>
              </ul>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h6 class="text-uppercase mb-0">Contact</h6>
              <br><br>
              <ul class="list-unstyled">
                <li class="text-white garis-bawah">Telp : 031-3011146</li>
                <li class="text-white garis-bawah">Fax : 031-3011146</li>
                <li class="text-white garis-bawah">Email : if.ft@trunojoyo.ac.id</li>
              </ul>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h6 class="text-uppercase">Layanan</h6>
              <br>
              <ul class="list-unstyled">
                <li class="text-white garis-bawah">Pembayaran UKT</li>
                <li class="text-white garis-bawah">Pendaftaran KP</li>
                <li class="text-white garis-bawah">Pendaftaran Wisuda</li>
                <li class="text-white garis-bawah">Administrasi</li>
              </ul>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h6 class="text-uppercase">Resource</h6>
              <br>
              <ul class="list-unstyled">
                <li class="text-white garis-bawah">e-Journal</li>
                <li class="text-white garis-bawah">Portal Tugas Akhir</li>
                <li class="text-white garis-bawah">Website Resmi Kampus</li>
                <li class="text-white garis-bawah">Download Administrasi</li>
              </ul>
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2022 By :
          <a class="text-white" href="">siti ma'rifatul khoiriyah</a>
        </div>
        <!-- Copyright -->
      </footer>
    </div>
    </body>
</html>


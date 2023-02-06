<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> -->
</head>
<body>
        <nav class="navbar navbar-expand-lg" style="padding-top:-50px; background-color:red;">
        <div class=" container-fluid">
            <a class="navbar-brand" href="#"><img src="logotelkom-putih.png" width="45px" alt=""><span style="color:white">SIAKAD</span></a>
           
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button> -->
    <div class="d-flex align-item-right">
            <input type="button" class="btn btn-light" style="margin-right:10px;" value="2022/2023">
            <input type="button" class="btn btn-light" value="XI-RPL 2">
            </div>
        </div>
        </nav>

        <!-- Sidebar -->
        <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color:#282E2F;" id="accordionSidebar">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item" style="background-color:grey;">
        <a class="nav-link " href="#" data-toggle="collapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>Leaderboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>Kehadiran Hari ini</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>Data absensi</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>Jadwal pelajaran</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>Rekap Nilai</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>Pelanggaran</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>SPP</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            aria-expanded="true" aria-controls="collapseUtilities">
            <span>Prakerin</span>
        </a>
    </li>
</ul>
<!-- End of Sidebar -->
    
<!-- konten -->
<div class="container"><br>
    <h4>LEADERBOARD-SMK TELKOM MALANG</h4><br>


            <div class="card">
                   <div class="card-header">
                        <form action="/siswa" method="GET">
                                <div class="row">
                                <div class="col">
                                        <input type="search" class="form-control" style="border:2px solid black;" autocomplete="off" name="cari_siswa" placeholder="cari siswa...">
                                </div>
                                <div class="col">
                                        <input type="submit" value="refresh" class="btn btn-primary">
                                </div>
                                </div>
                            </form> 
                   </div>
                <div class="card-body">
                    <form action="/siswa" method="GET">
                      <div class="row">
                          <div class="col-auto">
                                 <select name="filter_angkatan" id="" class="form-control">
                                    <option value="">Filter angkatan</option>
                                    <option value="29">Angkatan 29</option>
                                    <option value="30">Angkatan 30</option>
                                    <option value="31">Angkatan 31</option>
                                </select>
                          </div>
                           <div class="col">
                                <input type="submit" value="Terapkan" class="btn btn-primary">
                           </div>
                      </div>
                    </form><br>
                    <table class="table table-hover table-stripped ">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama Siswa</th>
                                <th>kelas</th>
                                <th>Angkatan</th>
                                <th>Nilai</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php($no = 1 )
                            @foreach($siswa as $data_siswa)
                               <tr role="row">
                                 <th>{{ $no }}</th>
                                 <th><a href="" 
                                    id="modalsiswa"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#detailsiswa" 
                                    style="text-decoration:none; color:black;"
                                    data-nama_siswa="{{ $data_siswa->nama_siswa }}"
                                    data-angkatan="{{ $data_siswa->angkatan }}"
                                    data-kelas="{{ $data_siswa->kelas }}"
                                    data-nisn="{{ $data_siswa->nisn }}"
                                    data-TempatTanggalLahir="{{ $data_siswa->TempatTanggalLahir }}"
                                    data-gender="{{ $data_siswa->gender }}"
                                    data-agama="{{ $data_siswa->agama }}"
                                 > {{ $data_siswa -> nama_siswa }}</a></th>
                                 <th>{{ $data_siswa -> kelas }}</th>
                                 <th>{{ $data_siswa -> angkatan }}</th>
                                 <th>{{ $data_siswa -> nilai }}</th>
                                 <th>Sementara Kosong</th>
                               </tr>
                            @php($no++)
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

</div>

<!-- endkonten -->

<!-- MODAL DETAIL SISWA -->

    <div class="modal fade" id="detailsiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Data siswa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body table-responsive">
              <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th>Nama siswa</th>
                            <td><span id="nama_siswa"></span></td>
                        </tr>
                        <tr>
                            <th>Nisn</th>
                            <td><span id="nisn"></span></td>
                        </tr>
                        <tr>
                            <th>Angkatan</th>
                            <td><span id="angkatan"></span></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><span id="kelas"></span></td>
                        </tr>
                        <tr>
                            <th>Tempat tanggal lahir</th>
                            <td><span id="TempatTanggalLahir"></span></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td><span id="gender"></span></td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td><span id="agama"></span></td>
                        </tr>
                    </tbody>
              </table>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

</body>






<script>
    $(document).ready(function(){
        $(document).on('click','#modalsiswa',function(){
            var nama_siswa = $(this).data('nama_siswa');
            var angkatan = $(this).data('angkatan');
            var kelas = $(this).data('kelas');
            var nisn = $(this).data('nisn');
            var TempatTanggalLahir = $(this).data('TempatTanggalLahir');
            var gender = $(this).data('gender');
            var agama = $(this).data('agama');
            $('#nama_siswa').text(nama_siswa);
            $('#angkatan').text(angkatan);
            $('#kelas').text(kelas);
            $('#nisn').text(nisn);
            $('#TempatTanggalLahir').text(TempatTanggalLahir);
            $('#gender').text(gender);
            $('#agama').text(agama);

        })
    })
</script>


</html>
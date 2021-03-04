@extends('layout/main')

@section('title', 'About')

@section('container')
  <div class="container">
    <h1 class="mt-3" style="text-align: center;">Tentang {{$nama}}</h1>
      <div class="row no-gutters">
        <div class="col-12 ">
          <div class="row">   
            <div class="col-12"><br>
              <p style="text-align: justify; font-size: 13pt;">Magang/PKL merupakan salah satu materi perkuliahan mahasiswa Teknik Informatika Fakultas Teknik Universitas Negeri Surabaya. Kegiatan ini diarahkan untuk memeberikan bekal pada mahasiswa agar dapat berperan dalam mengembangkan teknologi informasi pada Instansi pemerintahan, swasta, atau instansi lainnya.</p>
            </div>
          </div>
        </div>

        <div class="container" style="width: 40%; height: 40%;">
          <img src="/images/progress.svg">
        </div>      
          


      </div>

    
  </div>
@endsection


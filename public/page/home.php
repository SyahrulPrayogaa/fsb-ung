<!-- Carousel Jumbotron -->
<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/jumbotron-ung.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h3 class="display-4">Fakultas Sastra dan Budaya</h3>
        <h3 class="display-6">Universitas Negeri Gorontalo</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/1256.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/pimpinan.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<!-- End of Carousel Jumbotron -->


<!-- Statistik -->
<div class="container mb-5">
  <div class="row justify-content-center">
    <div class="col-10 statistik">

      <!-- Row Jumlah Mahasiswa -->
      <div class="row d-flex justify-content-center">
        <div class="col-xl-6 col-lg-7 col-md-9 col-sm-12 ">
          <div class="chart-box">
            <canvas id="mahasiswaChart1" width="400"></canvas>
            <div class="chart-info">
              <h2 class="num-title">11</h2>
              <div class="num-line"></div>
              <h4 class="text-content text-center">Jumlah Mahasiswa</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- end of Row Jumlah Mahasiswa -->

      <!-- Row Jumlah Tenaga Pendidik -->
      <div class="row d-flex justify-content-center">
        <!-- Jumlah Tenaga Pendidik -->
        <div class="col-xl-6 col-lg-6">
          <div class="row d-flex justify-content-center">
            <div class="col-xs-6 tendik-col">
              <h2 class="num-title">10</h2>
              <h4 class="text-content">Profesor</h4>
            </div>
            <div class="col-xs-6 tendik-col">
              <h2 class="num-title">10</h2>
              <h4 class="text-content">Lektor Kepala</h4>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-xs-6 tendik-col">
              <h2 class="num-title">10</h2>
              <h4 class="text-content">Lektor</h4>
            </div>
            <div class="col-xs-6 tendik-col">
              <h2 class="num-title">10</h2>
              <h4 class="text-content">Asisten Ahli & Pengajar</h4>
            </div>
          </div>
        </div>
        <!-- end 0f Jumlah Tenaga Pendidik -->

        <!-- Jumlah Dosen Tiap Jurusan -->
        <div class="col-xl-5 col-lg-5">
          <div class="chart-box">
            <canvas id="dosenChart" height="300"></canvas>
          </div>
        </div>
        <!-- Jumlah Dosen Tiap Jurusan -->

      </div>
      <!-- end of Row Jumlah Tenaga Pendidik -->

      <!-- Row Data Penelitian dan Pengabdian -->
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 ">
          <div class="chart-box">
            <canvas id="penelitianChart" height="300"></canvas>
          </div>
        </div>

        <div class="col-lg-6 ">
          <div class="chart-box">
            <canvas id="pengabdianChart" height="300"></canvas>
          </div>
        </div>
      </div>
      <!-- end of Row Data Penelitian dan Pengabdian -->

    </div>
  </div>
</div>
<!-- End of Statistik -->

<!-- Chart Mahasiswa -->
<script>
  const ctx2 = document.getElementById('mahasiswaChart1').getContext('2d');
  const myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
      labels: ['Pendidikan bahasa & sastra indonesia', 'Pendidikan bahasa inggris', 'pendidikan seni drama tari dan musik'],
      datasets: [{
        label: '# of Votes',
        data: [120, 190, 100],
        backgroundColor: [
          '#10002B', '#3C096C', '#FF9E00',
        ],
        borderColor: [
          'white'
        ],
        borderWidth: 1,
        cutout: '70%'
      }]
    },
    options: {
      plugins: {
        legend: {
          position: 'bottom',
          align: 'center',
        }
      },
      layout: {}
    }
  });
</script>
<!-- end of Chart Mahasiswa -->

<!-- Penelitian Chart -->
<script>
  const ctx3 = document.getElementById('penelitianChart').getContext('2d');
  const myChart3 = new Chart(ctx3, {
    type: 'bar',
    data: {
      labels: ['Jurnal Penelitian', 'Prosiding', 'HKI', 'penelitian', 'Hak Paten'],
      datasets: [{
        label: 'DATA PENELITIAN',
        data: [120, 190, 100, 50, 60],
        backgroundColor: [
          '#5A198A', '#10002B', '#FF9E00', '#9D4EDD', '#FF6D00'
        ],
        borderColor: [
          'white'
        ],
        borderWidth: 1,
      }]
    },
    options: {
      plugins: {
        legend: {
          position: 'top',
          align: 'center',
        }
      },
      layout: {}
    }
  });
</script>
<!-- end of Penelitian Chart -->

<!-- Pengabdian Chart -->
<script>
  const ctx4 = document.getElementById('pengabdianChart').getContext('2d');
  const myChart4 = new Chart(ctx4, {
    type: 'bar',
    data: {
      labels: ['Pengabdian', 'Laporan Pengabdian', 'HKI', 'penelitian', 'Hak Paten'],
      datasets: [{
        label: 'DATA PENGABDIAN',
        data: [100, 90, 40, 30, 95],
        backgroundColor: [
          '#5A198A', '#10002B', '#FF9E00', '#9D4EDD', '#FF6D00'
        ],
        borderColor: [
          'white'
        ],
        borderWidth: 1,
      }]
    },
    options: {
      plugins: {
        legend: {
          position: 'top',
          align: 'center',
        }
      },
      layout: {}
    }
  });
</script>
<!-- end of Pengabdian Chart -->

<!-- jumlah dosen Chart -->
<script>
  const ctx5 = document.getElementById('dosenChart').getContext('2d');
  const myChart5 = new Chart(ctx5, {
    type: 'bar',
    data: {
      labels: ['Basindo', 'Pbi', 'Sendratasik'],
      datasets: [{
        label: 'DATA JUMLAH DOSEN',
        data: [25, 35, 20],
        backgroundColor: [
          '#10002B', '#3C096C', '#FF9E00',
        ],
        borderColor: [
          'white'
        ],
        borderWidth: 1,
        cutout: '10'
      }]
    },
    options: {
      plugins: {
        legend: {
          position: 'top',
          align: 'center',
        }
      },
      layout: {}
    }
  });
</script>
<!-- end of jumlah dosen Chart -->

<!-- Pendidikan -->
<div class="penelitian">
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-6 d-flex justify-content-center">
        <img src="assets/img/professor.svg" alt="">
      </div>
      <div class="col-md-6">
        <h3 class="title-content">Pendidikan</h3>
        <div class="title-content-line"></div>
        <p class="text-content">Fakultas Sastra dan Budaya memiliki 3 jurusan yang menyelenggarakan pendidikan program sarjana yang dapat diikuti oleh lulusan SMA/SMK/MA/MAK dengan beban studi sebanyak 144 sks dan dapat ditempuh dalam waktu 8-14 semester.</p>
        <!-- <a href="#" class="link-content">Selengkapnya -></a> -->
      </div>
    </div>
  </div>
  <!-- End of Pendidikan -->

  <!-- Penelitian -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <h3 class="title-content">Penelitian</h3>
        <div class="title-content-line"></div>
        <p class="text-content">Fakultas Sastra dan Budaya memberikan perhatian khusus terhadap kegiatan-kegiatan penelitian serta mendorong dosen dan mahasiswa untuk melakukan dan mengembangkan berbagai penelitian yang berorientasi untuk memenuhi kebutuhan bangsa.</p>
        <!-- <a href="#" class="link-content">Selengkapnya -></a> -->
      </div>
      <div class="col-md-6 d-flex justify-content-center order-md-2 order-first">
        <img src="assets/img/file_analysis.svg" alt="">
      </div>
    </div>
  </div>
</div>
<!-- End of Penelitian -->
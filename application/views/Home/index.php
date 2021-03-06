<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>PrintMedia Percetakan Online di Indonesia Kelas Mahasiswa</title>
    <?php $this->load->view('Home/include/css'); ?>
</head>
<body>

<div id="header">
    <?php $this->load->view('Home/include/header'); ?>
</div>

<div id="search-engine">
    <div class="container">
        <h2>PrintMedia</h2>
        <p>Cari lokasi tempat percetakan atau nama percetakan. Cepat dan Mudah!</p>
        <form action="" method="post">
            <input type="search" class="search form-control mr-sm-2" name="search" placeholder="Cari Lokasi Percetakan...">
        </form>
    </div>
</div>

<div id="about" class="default-div">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="about-satu">
                    <img src="<?php echo base_url('asset/home/img/layanan1.jpg'); ?>" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <div class="about-dua">
                    <div class="default-custom">
                        <h3>Menjawab Kebutuhan Anda</h3>
                    </div>
                    <p>Print Media merupakan calon startup di Indonesia. Startup yang berfokus di bidang Percetakan dimana kami membantu teman-teman agar mudah dalam mencetak tugas-tugas, jurnal dan makalah. Kami hadir karena melihat kebutuhan dalam dunia percetakan sangat penting, apalagi saat ini semuanya pada sibuk dan tidak sempat untuk datang ke sebuah tempat percetakan. Disinilah kami hadir dan memberikan nuansa yang berbeda, dimana kami selalu siap membantu kebutuhan-kebutuhan dalam dunia percetakan.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pemesanan" class="default-div">
    <div class="container">
        <div class="default-heading">
            <h3>Hanya <span class="promo">3 Langkah</span><br> Barang Sampai di Tangan!</h3>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="pemesanan-image">
                    <img src="<?php echo base_url('asset/home/img/register.png'); ?>" class="img-fluid" width="100" height="100">
                </div>
                <div class="pemesanan-text">
                    <h4>Daftar di PrintMedia</h4>
                    <p>Mahasiswa / siswa melakukan pendaftaran di Print Media dan melengkapi data-datanya. Hanya email berdomain <b>.ac.id</b> atau <b>.edu</b> yang bisa mendaftar.</p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="pemesanan-image">
                    <img src="<?php echo base_url('asset/home/img/upload-dokumen.png'); ?>" class="img-fluid" width="100" height="100">
                </div>
                <div class="pemesanan-text">
                    <h4>Upload Dokumen</h4>
                    <p><b>1.</b> Mahasiswa mengunggah dokumen dengan format-format yang di inginkan.</p>
                    <p><b>2.</b> Pilih jenis pembayaran dan pengiriman.</p>
                    <p><b>3.</b> Pihak Print Media akan memproses pesanan.</p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="pemesanan-image">
                    <img src="<?php echo base_url('asset/home/img/shipping.png'); ?>" class="img-fluid" width="100" height="100">
                </div>
                <div class="pemesanan-text">
                    <h4>Dokumen Sampai</h4>
                    <p>Dokumen akan sampai sesuai dengan waktu yang telah ditentukan. Jika dalam waktu 7 hari tidak sampai, maka akan diberikan pengembalian uang.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mitra" class="default-div">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                <div class="default-custom">
                    <h3>GABUNG MENJADI MITRA KAMI</h3>
                </div>
                <p>If you are interested in joining or using our services interested in joining or using our services. If you are interested in joining or using our services interested in joining or using our services. Please contact us.</p>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12">
                <a href="" class="btn btn-block btn-success btn-mitra">HUBUNGI KAMI</a>
            </div>
        </div>
    </div>
</div>

<div id="blog" class="default-div">
    <div class="container">
        <div class="default-heading">
            <h3>BLOG</h3>
        </div>
        <div class="row mt-3">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-3">
                <a href="<?php echo base_url('/'); ?>">
                    <div class="card">
                        <img src="<?php echo base_url('asset/home/img/layanan1.jpg'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="<?php echo base_url('/'); ?>" class="badge badge-sm badge-warning">Kategori</a>
                            <h4 class="card-title">Ini Judul Loh</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-3">
                <a href="<?php echo base_url('/'); ?>">
                    <div class="card">
                        <img src="<?php echo base_url('asset/home/img/layanan1.jpg'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="<?php echo base_url('/'); ?>" class="badge badge-sm badge-warning">Kategori</a>
                            <h4 class="card-title">Ini Judul Loh</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-3">
                <a href="<?php echo base_url('/'); ?>">
                    <div class="card">
                        <img src="<?php echo base_url('asset/home/img/layanan1.jpg'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="<?php echo base_url('/'); ?>" class="badge badge-sm badge-warning">Kategori</a>
                            <h4 class="card-title">Ini Judul Loh</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-3">
                <a href="<?php echo base_url('/'); ?>">
                    <div class="card">
                        <img src="<?php echo base_url('asset/home/img/layanan1.jpg'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="<?php echo base_url('/'); ?>" class="badge badge-sm badge-warning">Kategori</a>
                            <h4 class="card-title">Ini Judul Loh</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <?php $this->load->view('Home/include/footer'); ?>
</div>

<!-- JavaScript -->
<?php $this->load->view('Home/include/js'); ?>

</body>
</html>
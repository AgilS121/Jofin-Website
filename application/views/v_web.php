<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JOFIN Mobile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?= base_url('assets/') ?>img/icon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= base_url('assets/web/') ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url('assets/web/') ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/web/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/web/') ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/web/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/web/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= base_url('assets/web/') ?>css/style.css" rel="stylesheet">

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left" style="color: black;">
                <img src="<?= base_url('assets/') ?>img/icon.png" width="50" height="50">
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Tutorial</a></li>
                    <li><a href="#lowongan">Lowongan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url('<?= base_url('assets/web/') ?>img/intro-carousel/1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>JOFIN Mobile</h2>
                                <p>JOFIN Mobile adalah aplikasi dan website yang menyediakan lowongan pekerjaan bagi pengangguran yang ada dimana mana</p>

                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('<?= base_url('assets/web/') ?>img/intro-carousel/2.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Lowongan</h2>
                                <p>Macam-macam lowongan dari berbagai perusahaan-perusahaan yang ada di daerah sekitar yang dapat kalian dapatkan</p>

                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('<?= base_url('assets/web/') ?>img/intro-carousel/3.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Protokol Kesehatan</h2>
                                <p>Meningkatnya kasus Covid-19 di Indonesia membuat lowongan pekerjaan semakin menipis dan jangan lupa patuhi protokol kesehatan yang ada</p>

                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
      About Us Section
    ============================-->
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>Tentang</h3>
                    <p>JOFIN Mobile adalah aplikasi BKK yang dikhsusukan untuk alumni SMKN 1 Purbalingga yang digunakan apabila siswa sudah lulus menempuh pendidikan disekolah yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja</p>
                    <h3>Tujuan</h3>
                    <p> Sebagai wadah dalam mempertemukan tamatan dengan pencari kerja.<br>
                        Memberikan layanan kepada tamatan sesuai dengan tugas dan fungsi masing-masing seksi yang ada dalam BKK.<br>
                        Sebagai wadah dalam pelatihan tamatan yang sesuai dengan permintaan pencari kerja<br>
                        Sebagai wadah untuk menanamkan jiwa wirausaha bagi tamatan melalui pelatihan.<br>
                    </p>
                </header>

            </div>
        </section><!-- #about -->

        <!--==========================
      Services Section
    ============================-->
        <section id="services">
            <div class="container">

                <header class="section-header wow fadeInUp">
                    <h3>Tutorial</h3>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                        <h4 class="title"><a href="#">Download Aplikasi</a></h4>
                        <p class="description">Download aplikasi, instal dan daftar sebagai user</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                        <h4 class="title"><a href="#">Cari Lowongan</a></h4>
                        <p class="description">Cari lowongan yang sesua dengan bakat dan kemampuan kita</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-paper-outline"></i></div>
                        <h4 class="title"><a href="#">Download File atau Daftar</a></h4>
                        <p class="description">Pencari dapat download file lowongan atau daftar lewat aplikasi dengan menyimpan hasil screenshot bukti pendaftaran</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                        <h4 class="title"><a href="#">Admin JOFIN</a></h4>
                        <p class="description">Pencari datang ke kantor BKK dan menyerahkan bukti pendaftaran dan file yang terlampir</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                        <h4 class="title"><a href="#">Proses</a></h4>
                        <p class="description">Pencari dapat menunggu dirumah sampai status berubah menjadi diterima</p>
                    </div>

                </div>

            </div>
        </section><!-- #services -->
        <!--==========================
      Facts Section
    ============================-->
        <section id="facts" class="wow fadeIn">
            <div class="container">
                <?php
                $servername = "localhost";
                $database = "bkk";
                $username = "root";
                $password = "";
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $database);
                $query = $conn->query("SELECT * FROM tb_lowongan");
                $query1 = $conn->query("SELECT * FROM tb_users");
                $query3 = $conn->query("SELECT * FROM tb_pendaftaran");

                $jml_posisi = mysqli_num_rows($query);
                $jml_user = mysqli_num_rows($query1);
                $jml_pendaftar = mysqli_num_rows($query3);
                ?>
                <header class="section-header">
                    <h3>Detail Informasi</h3>
                    <p>Berikut adalah detail masing masing dari JOFIN Mobile</p>
                </header>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up"><?= $jml_posisi ?></span>
                        <p>Posisi Lowongan</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up"><?= $jml_user ?></span>
                        <p>Pengguna</p>
                    </div>
                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up"><?= $jml_pendaftar ?></span>
                        <p>Pendaftar</p>
                    </div>

                </div>
            </div>
        </section><!-- #facts -->

        <!--==========================
      Portfolio Section
    ============================-->
        <section id="lowongan" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Lowongan</h3>
                </header>

                <div class="row lowongan-container">
                    <?php
                    $no = 0;
                    foreach ($data->result_array() as $i) :
                        $no++;
                        $id = $i['id'];
                        $img = $i['logo'];
                        $nama = $i['nama'];
                        $link = $i['link'];
                        $skil = $i['skill'];
                        $total = $i['total'];
                        $buka = $i['buka'];
                        $tutup = $i['tutup'];
                        $gender = $i['gender'];
                        $created = $i['created_at'];

                    ?>
                        <div class="col-lg-4 col-md-6 lowongan-item filter-app wow fadeInUp">
                            <div class="lowongan-wrap">

                                <figure>
                                    <img src="<?php echo base_url('assets/logo/' . $img); ?>" class="img-fluid" width="350px">
                                    <a href="<?= $link; ?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                </figure>

                                <div class="lowongan-info">
                                    <h4><a href="#"><?= $nama; ?></a></h4>
                                    <p>Buka <?= $buka; ?> - <?= $tutup; ?> </p>
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

            </div>
        </section><!-- #portfolio -->


        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Kontak</h3>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>SMKN 1 Purbalingga</h3>
                            <address>Jalan Mayjend Sungkono Purbalingga 53371</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>No Telp</h3>
                            <p><a href="tel:+155895548855">(0281) 891550</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">info@smkn1pbg.sch.id</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <?= $this->session->flashdata('msg'); ?>
                    <form action="<?php echo base_url() . 'web/tambah' ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />

                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>

                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">


        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>JOFIN</strong>. All Rights Reserved
            </div>

        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="<?= base_url('assets/web/') ?>lib/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/superfish/hoverIntent.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/superfish/superfish.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?= base_url('assets/web/') ?>lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url('assets/web/') ?>contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url('assets/web/') ?>js/main.js"></script>

</body>

</html>
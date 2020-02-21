<!doctype html>
<html lang="en-US">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>AY</title>
    </head>

    <body>

        <nav class="navbar navbar-default navbar-expand-lg fixed-top custom-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon ion-md-menu"></span>
            </button>
            <img src="images/logo.png" class="img-fluid nav-logo-mobile" alt="Company Logo">
            <div class="container">
                <img src="images/logo.png" class="img-fluid nav-logo-desktop" alt="Company Logo">
                <ul class="navbar-nav ml-auto nav-right" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
                </ul>
            </div>
        </nav>

        <section id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <?php
                        $hasil = 0;

                        if (isset($_POST['a9']) + isset($_POST['a10']) + isset($_POST['a11']) + isset($_POST['a17']) == 4) {
                            $hasil = 1;
                        }
                        if (isset($_POST['a9']) + isset($_POST['a10']) + isset($_POST['a11']) + isset($_POST['a18']) == 4) {
                            $hasil = 2;
                        }
                        if (isset($_POST['a9']) + isset($_POST['a10']) + isset($_POST['a11']) + isset($_POST['a19']) == 4) {
                            $hasil = 3;
                        }
                        if (isset($_POST['a9']) + isset($_POST['a10']) + isset($_POST['a11']) + isset($_POST['a5']) + isset($_POST['a6']) + isset($_POST['a7']) + isset($_POST['a17']) == 7) {
                            $hasil = 4;
                        }
                        if (isset($_POST['a9']) + isset($_POST['a10']) + isset($_POST['a11']) + isset($_POST['a1']) + isset($_POST['a2']) + isset($_POST['a3']) + isset($_POST['a17']) == 7) {
                            $hasil = 5;
                        }
                        if (isset($_POST['a9']) + isset($_POST['a10']) + isset($_POST['a11']) + isset($_POST['a13']) + isset($_POST['a14']) + isset($_POST['a15']) + isset($_POST['a17']) == 7) {
                            $hasil = 6;
                        }
                        if (isset($_POST['a9']) + isset($_POST['a10']) + isset($_POST['a5']) + isset($_POST['a6']) + isset($_POST['a1']) + isset($_POST['a2']) + isset($_POST['a19']) == 7) {
                            $hasil = 7;
                        }
                        if (isset($_POST['a1']) + isset($_POST['a2']) + isset($_POST['a3']) + isset($_POST['a4']) + isset($_POST['a5']) + isset($_POST['a6']) + isset($_POST['a7'])+ isset($_POST['a8'])+ isset($_POST['a9'])+ isset($_POST['a10'])+ isset($_POST['a11'])+ isset($_POST['a12'])+ isset($_POST['137'])+ isset($_POST['a14'])+ isset($_POST['a15'])+ isset($_POST['a16']) == 16) {
                            $hasil = 8;
                        }
                        if (isset($_POST['a9']) + isset($_POST['a10']) + isset($_POST['a5']) + isset($_POST['a6']) + isset($_POST['a13']) + isset($_POST['a14']) + isset($_POST['a19']) == 7) {
                            $hasil = 9;
                        }
                        if (isset($_POST['a17']) + isset($_POST['a18']) + isset($_POST['a19']) == 0) {
                            $hasil = 10;
                        }
                        ?>
                        <img src="images/<?php echo $hasil; ?>.png" class="img-fluid" alt="Demo image">
                    </div>
                    <div class="col-md-7 content-box hero-content">
                        <h1>Smartphone yang cocok buat kamu adalah :</h1>
                        <?php
                        if ($hasil == 0) {
                            echo '<p>Hp anda belum bisa diketahui secara spesifik coba mulai tes lagi.</p><br>';
                        }
                        if ($hasil == 1) {
                            echo '<p>Sony Xperia XZ1</p><br>';
                        }
                        if ($hasil == 2) {
                            echo '<p>Htc U11</p><br>';
                        }
                        if ($hasil == 3) {
                            echo '<p>Moto X4</p><br>';
                        }
                        if ($hasil == 4) {
                            echo '<p>Sony Xperia XZ2</p><br>';
                        }
                        if ($hasil == 5) {
                            echo '<p>LG G7</p><br>';
                        }
                        if ($hasil == 6) {
                            echo '<p>Google Pixel 3</p><br>';
                        }
                        if ($hasil == 7) {
                            echo '<p>Samsung Galaxy S9</p><br>';
                        }
                        if ($hasil == 8) {
                            echo '<p>Samsung Galaxy Note 8</p><br>';
                        }
                        if ($hasil == 9) {
                            echo '<p>LG g8</p><br>';
                        }
                        if ($hasil == 10) {
                            echo '<p>Tidak ada smartphone yang sesuai dengan kebutuhan anda tentukan harga yang diinginkan</p><br>';
                        }
                        ?>
                        <a href="soal.html" class="btn btn-regular">Mulai Lagi</a>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <small>2018 &copy; Dibuat oleh ambika dan yordan</small>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
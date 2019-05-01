<!DOCTYPE html>
<style>
    body{
        background-image: url("ho.jpg");
    }
    </style>
    
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap slide</title>
    <!-- Load bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Load jquery and bootstrap js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
<BR>
<center><h3 style="color:#F5FFFA">Tempat Wisata yang bisa dikunjungi</h3></center>
<body>
<a href="beranda.php">KEMBALI</a>
    <div class="container">
        <div class="carousel slide" data-ride="carousel" id="slide">
                <!--indikator slide -->
                <ul class="carousel-indicators">
                    <li data-target="#slide" data-slide-to="0" class="active"></li>
                    <!-- class active berarti elemen tersebut yang pertama kali ditampilkan saat load halaman -->
                    <li data-target="#slide" data-slide-to="1"></li>
                    <li data-target="#slide" data-slide-to="2"></li>
                    <li data-target="#slide" data-slide-to="3"></li>
                    <li data-target="#slide" data-slide-to="4"></li>
                </ul>

                <!-- gambar slide -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="2.jpg" width="100%" height="500" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="1.jpg" width="100%" height="500" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="3..jpg" width="100%" height="500" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="4.jpg" width="100%" height="500" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="5.jpg" width="100%" height="500" alt="">
                    </div>
                </div>

                <!-- navigasi slide -->
                <a href="#slide" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#slide" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon"></span>
                </a>

                
        </div>
    </div>
</body>
<br>
<marquee>
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    </marquee>
</html>
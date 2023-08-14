<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Püsküt Fotoğraf</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>
    <div class="bg-image"></div>

    <div class="menu">
        <!-- Logo ayarlar -->
        <div class="sol-logo">
            <a href="index.php">
                <img src="images/header-logo.png" alt="">
            </a> <!-- Logo ayarlar -->
            <ul>
                <!--Ana yazılar -->
                <li><a class="yazi" href="index.php">Anasayfa</a></li>
                <li><a class="yazi" href="#">Hakkımızda</a></li>
                <li><a class="yazi" href="iletisim.php">İletişim</a></li>
                <!--Ana yazılar -->
                <!--Hamburger Menü -->
                <span class="acik" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a href="index.php">Anasayfa</a>
                        <a href="#">Hakkımızda</a>
                        <a href="iletisim.php">İletişim</a>
                    </div>
                </div>
                <!--Hamburger Menü -->
            </ul>
        </div>

        <div class="content">
            <h1>Mareşal Püsküt <br><i class="fa-solid fa-camera"></i>@maresalpuskut</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <a href="#" class="btn">Daha Fazla</a>
        </div>
    </div>
</header>


<main>
    <section id="section-a">
        <div class="content">
            <h2>Nature & Landscpae Photography</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, aspernatur.</p>
        </div>
    </section>


    <section id="section-b">
        <ul>
            <li>
                <div class="col">
                    <img src="images/sira-1.jpg" alt="">
                    <div class="col-content">
                        <h3 class="col-title">
                            Photography
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col">
                    <img src="images/sira-2.jpg" alt="">
                    <div class="col-content">
                        <h3 class="col-title">
                            Photography
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="col">
                    <img src="images/sira-3.jpg" alt="">
                    <div class="col-content">
                        <h3 class="col-title">
                            Photography
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </li>
        </ul>
    </section>


    <section id="section-c">
        <div class="content">
            <h2><i class="fa-solid fa-circle-info"></i> Information </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor fugit commodi autem culpa, incidunt
                hic!</p>
        </div>
    </section>


    <section id="section-d" class="clearfix">
        <div class="box">
            <h2 class="content-title">
                About Us
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, distinctio!
            </p>
            <p><i class="fa-brands fa-instagram"></i> instagram.com/maresalpuskut</p>
        </div>

        <div class="box"><a name="Contact"></a>
            <h2 class="content-title">
                Contact Us
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, similique?
            </p>
            <p><i class="fa-brands fa-instagram"></i> instagram.com/maresalpuskut</p>
        </div>
    </section>


</main>


<!--FOOTER BASLANGİC-->
<footer id="footer">
    <div class="footer">
        <div class="footer-content">
            <div class="page-title">
                <h2>Bisküvi Fotoğraf</h2>
            </div>

            <nav class="footer-social">
                <ul>
                    <li>
                        <a href="#">
                            <button class="btn2 btn-outline btn-social">
                                <i class="fa-brands fa-facebook-f"></i>
                            </button>
                        </a>

                        <a href="#">
                            <button class="btn2 btn-outline btn-social">
                                <i class="fa-brands fa-twitter"></i>
                            </button>
                        </a>

                        <a href="https://www.instagram.com/maresalpuskut/" target="_blank">
                            <button class="btn2 btn-outline btn-social">
                                <i class="fa-brands fa-instagram"></i>
                            </button>
                        </a>
                    </li>
                    <ul>
            </nav>

            <div class="footer-copyright">
                <p> © COPYRIGHT - 2022 BISKUVI FOTOGRAF<br>
                    powered by <a href="https://www.instagram.com/maresalpuskut/" target="_blank"
                                  class="ozel">UBC</a></p>
                <br>
            </div>
        </div>
    </div>

</footer>

<!--FOOTER BİTİS-->


<!-- Hamburger Buton Script -->
<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>
<!-- Hamburger Buton Script -->


<script src="sweetalert2.all.min.js"></script>
<script src="https://kit.fontawesome.com/c5eff4ee4b.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>


</body>

</html>
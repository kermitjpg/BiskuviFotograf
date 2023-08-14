<?php
include("baglan.php")
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Püsküt Fotoğraf</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>

<body>

    <header>
        <div class="bg-image-iletisim"></div>

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
            <div class="contact-form">
                <h1>BİZİMLE ÇALIŞMAK İSTER MİSİNİZ ?</h1>
            </div>
            <div class="form-elemanlar">
                <form id="iletisimForm">
                    <label for="">ADINIZ SOYADINIZ</label>
                    <input type="text" name="ad_soyad" autocomplete="off">
                    <label for="">E-MAIL ADRESINIZ</label>
                    <input type="email" name="email" autocomplete="off">
                    <label for="">MESAJINIZ</label>
                    <textarea name="not" id="" cols="30" rows="10"></textarea><br>
                    <button type="button" id="btnGonder">Gönder</button>
                </form>
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
                            <a href="#"><button class="btn2 btn-outline btn-social">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </button></a>

                            <a href="#"><button class="btn2 btn-outline btn-social">
                                    <i class="fa-brands fa-twitter"></i>
                                </button></a>

                            <a href="https://www.instagram.com/maresalpuskut/" target="_blank"><button class="btn2 btn-outline btn-social">
                                    <i class="fa-brands fa-instagram"></i>
                                </button></a>
                        </li>
                        <ul>
                </nav>

                <div class="footer-copyright">
                    <p> © COPYRIGHT - 2022 BISKUVI FOTOGRAF<br>
                        powered by <a href="https://www.instagram.com/maresalpuskut" target="_blank" class="ozel">UBC</a></p>
                    <br>
                </div>
            </div>
        </div>

    </footer>

    <!--FOOTER BİTİS-->









    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/c5eff4ee4b.js" crossorigin="anonymous"></script>
  





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






    <script type="text/javascript">
        $("#btnGonder").on("click", function() {
            var data = $("#iletisimForm").serialize();
            $.ajax({
                url: 'ekle.php',
                type: 'POST',
                data: data,
                success: function(e) {

                    Swal.fire({
                        title: 'Harika',
                        text: 'Talebiniz başarıyla alınmıştır. En kısa sürede dönüş yapılacaktır',
                        icon: 'success',
                        confirmButtonText: 'Tamam',
                        confirmButtonColor: "#000",

                    }).then((result) => {
                        window.location.reload();
                    })

                }
            });
        });
    </script>

</body>

</html>
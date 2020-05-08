<?php session_start();
    
    /* Eğer Giriş Yap butonuna tıklanırsa if bloğuna giriliyor.*/
        if(isset($_POST['giris'])){
            
            /* Kullanıcı giriş bilgilerini içeren dizi */
            $bilgiler = array('g191210082@ogr.sakarya.edu.tr' => '123');

            /* kullaniciAdi değişkenine eğer girildiyse kullaniciAdi inputu veriliyor. */
            $kullaniciAdi = isset($_POST['inputKullaniciAdi']) ? $_POST['inputKullaniciAdi'] : '';
            
            /* sifre değişkenine eğer girildiyse sifre inputu veriliyor. */
            $sifre = isset($_POST['inputSifre']) ? $_POST['inputSifre'] : '';
            
            
            /* eğer bilgiler dizisinde girilen kullanıcı adı varsa ve şifreyle eşleşiyorsa if  bloğuna giriliyor. */
            if (isset($bilgiler[$kullaniciAdi]) && $bilgiler[$kullaniciAdi] == $sifre){
                
                $_SESSION['KullaniciBilgisi']['KullaniciAdi']=$bilgiler[$kullaniciAdi]; 
  
                
                /* Ekrana hoşgeldizin mesajını çıkartan fonksiyon */
                /* girilen email bilgisi @ değerinden itibaren iki string'e ayrılıyor. */
                /* Ayrılan dizinin 0'ıncı indexli elemanı isim olarak alınıyor. */
                /* Daha sonra javascript ile birlikte ekrana mesaj çıkartılıp ana sayfaya dönüp dönmeme sorgusu yapılıyor.*/
                function function_hosgeldin($username) {
                    $userArray = explode("@", $username);
                    $user = $userArray[0];
                    echo '<script>if (confirm("Hoşgeldiniz, '.$user.'\nAnasayfaya dönmek ister misiniz? ")) {
                      window.location.replace("index.html");
                   } else {
                      
                   };</script>';
                } 
  
  
                /* input olarak verilen kullanıcı adı üstte tanımlanan fonksiyona veriliyor. */
                function_hosgeldin($kullaniciAdi); 
                    exit;
                } 
            
                /* eğer kullanıcı bilgilerinden en az biri yanlış girilirse ekrana hatalı giriş uyarısı çıkartılıyor.*/
                else {
                      echo '<script>
                            if ( document.getElementById("mail")==null){
                                document.getElementById("mailhata").innerHTML="E-Mail boş olamaz.";
                            }
                             document.getElementById("hata").innerHTML = "Hatalı Giriş Yaptınız.";
                           </script>'; 
                }
        }

?>


<!doctype html>
<html lang="en">

<head>
    <!-- BioRyhme fontu eklendi. -->
    <link href='https://fonts.googleapis.com/css?family=BioRhyme' rel='stylesheet'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap ve main css dosyası linklendi -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="stiller/main.css" />

    <style>
        .log-in {
            max-width: 350px;
            background: white;
            padding: 40px;
            color: white;
            letter-spacing: 1px;
            margin: auto;
            font-size: 18px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 10px;
            margin: 10px;
        }

        input[type=submit] {
            width: 49%;
            padding: 15px;
            margin-top: 30px;
            background: #75e0c2;
            border: none;
            color: black;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
        }

        @media screen and (max-width:600px) {
            input[type=submit] {
                width: 100%;
            }

        }

        html {
            height: 100%;
        }

        body {
            min-height: 100%;
        }

        #footer {
            margin-top: auto;
        }

    </style>




    <title>Giriş Yap</title>
</head>

<body>

    <a name="navbar"></a>

    <!-- Menü tasarımı yapıldı -->
    <nav class="navbar   navbar-expand-sm  navbar-light ">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light " href="index.html">Hakkında</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light " href="ozgecmis.html">Özgeçmiş</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light " href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light " href="mirasimiz.html">Mirasımız</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light " href="iletisim.php">İletişim</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link text-light " href="login.php">Giriş Yap</a>
        </ul>
    </nav>


    <!-- Sayfanın üst kısmına sayfaya özel logo eklendi -->
    <div class="container logo">
        <div class="resim">

            <img src="images/logos/giris.png" class=" img-fluid rounded mx-auto d-block" alt="logo" width="500" height="500">
        </div>
    </div>





    <div>
        <div id="container">
            <div id="main">
                <div class="log-in">
                    <h3 style="color:black;">Kullanıcı Girişi</h3>
                    <form action="" method="post" name="GirisFormu">
                        <label style="color:black" for="ad">Kullanıcı Adı</label>
                        <input type="text" name="inputKullaniciAdi" id="mail" placeholder="Kullanıcı Adı">
                        <div style="color:red" id="mailhata"></div>
                        <label style="color:black" for="sifre">Şifre</label>
                        <input type="password" name="inputSifre" id="sifre" placeholder="Şifre">
                        <div style="color:red" id="sifrehata"></div>
                        <br>
                        <input type="submit" name="giris" value="Giriş Yap" onclick="return kontrol();"><br>

                        <p style="color:red" id="hata"></p>


                    </form>
                </div>
            </div>
        </div><br><br><br>
    </div>


    <script type="text/javascript">
        function kontrol() {
            var mail = document.getElementById("mail").value;
            var mailmesaj = document.getElementById("mailhata");
            var sifre = document.getElementById("sifre").value;
            var sifremesaj = document.getElementById("sifrehata");
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var sayac = 0;
            
            mailmesaj.innerHTML="";
            sifremesaj.innerHTML="";

            if (mail == "") {
                mailmesaj.innerHTML = "Kullanıcı Adı kısmı boş geçilemez!";
                sayac = sayac + 1;

            } else if(regex.test(mail)==false) {
                mailmesaj.innerHTML = "Geçerli bir kullanıcı adı giriniz!";
                sayac++;
            }
            
            if(sifre==""){
                sifremesaj.innerHTML="Şifre kısmı boş geçilemez!";
                sayac++;
            }
            
            if (sayac != 0) {
                return false;
            }
        }
    </script>



    <!-- Sayfanın en altına kişisel linkler ve bilgiler barındıran footer eklendi -->
    <footer class="page-footer  font-small black" id="footer">
        <div class="container text-center">
            <div class="row footer-text ">
                <div class="col-md-3">
                    <br>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.instagram.com/sevdetneng/ " target="_blank">
                                <img src="images/footer/insta.png" class="img fluid" width="60" height="60">
                            </a>
                        </li>


                    </ul>


                </div>
                <div class="col-md-3">
                    <br>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://facebook.com/stzpkalp2/" target="_blank">
                                <img src="images/footer/face.png" class="img-fluid" width="80" height="80">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">

                    <br>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://github.com/SevdetNeng " target="_blank">


                                <img src="images/footer/github2copy.jpg" class="img-fluid" width="60" height="60">
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 ">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#navbar">
                                <br>
                                <div>
                                    <img src="images/footer/yukariyeni.png" class="img-fluid" width="100" height="100">

                                </div>
                            </a>

                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>










    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

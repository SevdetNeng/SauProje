<!doctype html>
<html lang="en">

<head>
    <!-- BioRyhme fontu eklendi. -->
    <link href='https://fonts.googleapis.com/css?family=BioRhyme' rel='stylesheet'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap ve main css dosyası linklendi -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />



    <title>Hakkında</title>
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
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link text-light " href="login.php">Giriş Yap</a>
        </ul>
    </nav>


    <!-- Sayfanın üst kısmına sayfaya özel logo eklendi -->
    <div class="container logo">
        <div class="resim">

            <img src="images/logos/hakkinda.png" class=" img-fluid rounded mx-auto d-block" alt="logo" width="500" height="500">
        </div>
    </div>
    <div class="container">
        <form action="" method="post" name="GirisFormu">
            <table width="400" border="0" align="center" cellpadding="10" class="Table">

                <tr>
                    <td colspan="2" align="left" valign="top">
                        <h3>Kullanıcı Girişi</h3>
                    </td>
                </tr>
                <tr>
                    <td align="right" valign="top">E-Mail</td>
                    <td><input name="inputKullaniciAdi" type="text" class="Input"></td>
                </tr>
                <tr>
                    <td align="right">Şifre</td>
                    <td><input name="inputSifre" type="password" class="Input"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td><input name="giris" type="submit" value="Giriş Yap" class="Button3"></td>
                </tr>
                <tr>
                    <td> </td>
                    <td align="left">
                        <p style="color:red" id="hata"></p>
                    </td>
                </tr>
            </table>
        </form>
    </div><br><br><br>


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
                      window.location.replace("login.php");
                   };</script>';
                } 
  
  
                /* input olarak verilen kullanıcı adı üstte tanımlanan fonksiyona veriliyor. */
                function_hosgeldin($kullaniciAdi); 
                    exit;
                } 
            
                /* eğer kullanıcı bilgilerinden en az biri yanlış girilirse ekrana hatalı giriş uyarısı çıkartılıyor.*/
                else {
                      echo '<script>
                             document.getElementById("hata").innerHTML = "Hatalı Giriş Yaptınız.";
                           </script>'; 
                }
        }

?>

    <!-- Sayfanın en altına kişisel linkler ve bilgiler barındıran footer eklendi -->
    <footer class="page-footer font-small black">
        <div class="container text-center">
            <div class="row footer-text ">
                <div class="col-md-3">
                    <br>
                    <h5>
                        Sosyal Medya
                    </h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.instagram.com/sevdetneng/ " target="_blank">
                                <img src="images/footer/insticon1.png" class="img fluid" width="90" height="90">
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="https://www.facebook.com/stzpkalp2" target="_blank">
                                <img src="images/footer/facebook1.png" width="90" height="90">
                            </a>
                        </li>
                    </ul>


                </div>
                <div class="col-md-3">
                    <br>
                    <h5>
                        GitHub
                    </h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://github.com/SevdetNeng " target="_blank">


                                <img src="images/footer/github2copy.jpg" width="80" height="80">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <br>
                    <h5>
                        İletişim
                    </h5>
                    <ul class="list-unstyled">
                        <li>

                            <img src="images/footer/gmail1.png" width="70" height="70">

                        </li>
                        <li>
                            <br><br>
                            <h6><br>
                                sevdetneng@gmail.com
                            </h6>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 ">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#navbar">
                                <br>
                                <img src="images/footer/yukari2.png" class="img-fluid">
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

<!doctype html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=BioRhyme' rel='stylesheet'>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="stiller/goruntule.css" />



    <title>İletişim Formunuz</title>
</head>

<body>
    

    
    <a name="navbar"></a>
    
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



    <div class="container align-items-center  logo">
        <div class="resim">

            <img src="images/logos/iletisim.png" class=" img-fluid rounded mx-auto d-block" alt="logo" width="500" height="500">
        </div>
    </div><br>

    <div class="tablo">
        <div class="container table">
            
            <br><div class="row form-baslik  ">
                
                <h1>İletişim Formunuz</h1>
                
                                       
            </div><br><br>
            
            <div class="row isim-sorgu">
                <h2>İsminiz: </h2> 
            </div>
            <div class="row isim">
                <h4><?php echo $_POST["isim"]; ?></h4>
            </div><br><br>
            
            
            <div class="row soyisim-sorgu">
                <h2>Soyisminiz:</h2>
            </div>
            <div class="row soyisim">
                <h4><?php echo $_POST["soyisim"]; ?></h4>
            </div><br><br>
            
            
            <div class="row email-sorgu">
                <h2>E-Mail'iniz:</h2>
            </div>
            <div class="row email">
                <h4><?php echo $_POST["email"]; ?></h4>
            </div><br><br>
            
            <div class="row cinsiyet-sorgu">
                <h2>Cinsiyetiniz:</h2>
            </div>
            <div class="row soyisim">
                <h4><?php echo $_POST["cinsiyet"]; ?></h4>
            </div><br><br>
            
            <div class="row ulke-sorgu">
                <h2>Yaşadığınız Ülke:</h2>
            </div>
            <div class="row ulke">
                <h4><?php echo $_POST["ulke"]; ?></h4>
            </div><br><br>
            
            <div class="row mesaj-sorgu">
                <h2>Mesajınız:</h2>
            </div>
            <div class="row mesaj">
                <div class="col-md-6">
                    <h5><?php echo $_POST["mesaj"]; ?></h5>
                </div>
                
            </div><br><br>
            
            
            
            
            



        </div>
    </div><br>

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

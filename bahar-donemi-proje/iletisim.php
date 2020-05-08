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
    <link rel="stylesheet" type="text/css" href="stiller/iletisim.css" />

    <script type="text/javascript">
        
        


        function Dogrula() {

            var degIsim = document.getElementById("isim").value;
            var divIsim = document.getElementById("isimdiv");
            var divGonderildi = document.getElementById("gonderildi");

            var sayac = 0;

            var degSoyisim = document.getElementById("soyisim").value;
            var divSoyisim = document.getElementById("soyisimdiv");

            var degMail = document.getElementById("email").value;
            var divMail = document.getElementById("emaildiv");
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

            var degErkek = document.getElementById("erkek").checked;
            var degKadin = document.getElementById("kadin").checked;
            var divCinsiyet = document.getElementById("cinsiyetdiv");

            var degMesaj = document.getElementById("message").value;
            var divMesaj = document.getElementById("messagediv");

            divIsim.innerHTML = "";
            divCinsiyet.innerHTML = "";
            divMail.innerHTML = "";
            divSoyisim.innerHTML = "";
            divMesaj.innerHTML = "";


            if (degIsim == "") {
                divIsim.innerHTML = "İsim boş olamaz!";
                sayac = sayac + 1;
                
                
                

            } else if (numaraKontrol(degIsim) == true) {
                divIsim.innerHTML = "İsim numara içeremez!";
                sayac = sayac + 1;
               
                
            } else if (!format.test(degIsim) == false) {
                divIsim.innerHTML = "İsim özel karakter içeremez!";
                sayac = sayac + 1;
                
                
            }

            if (degSoyisim == "") {
                divSoyisim.innerHTML = "Soyisim boş olamaz!";
                sayac = sayac + 1;
             
                
                

            } else if (numaraKontrol(degSoyisim) == true) {
                divSoyisim.innerHTML = "Soyisim numara içeremez!";
                sayac = sayac + 1;
                
                
            } else if (!format.test(degSoyisim) == false) {
                divSoyisim.innerHTML = "Soyisim özel karakter içeremez!";
                sayac = sayac + 1;
                
            }

            if (degMail == "") {
                divMail.innerHTML = "E-Mail boş olamaz!";
                sayac = sayac + 1;
                

            } else if (regex.test(degMail) == false) {
                divMail.innerHTML = "Geçerli bir e-mail giriniz."
                sayac = sayac + 1;
                
            }

            if (!degErkek && !degKadin) {
                divCinsiyet.innerHTML = "Cinsiyet seçilmelidir!";
                sayac = sayac + 1;
                
            }

            if (degMesaj == "") {
                divMesaj.innerHTML = "Mesaj boş olamaz!";
                sayac = sayac + 1;
                
            }
            
            if(sayac!=0){
                return false;
            }
            
            

        
                
                
            

        }

        function numaraKontrol(x) {
            var regex = /\d/g;
            return regex.test(x);
        }

    </script>
    

    <title>Özgeçmiş</title>
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

        
        <div class="container iletisim-form">
            <h1>İletişim Formu</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>Sevdet IŞIK</p>
                    <p>Email : sevdetneng@gmail.com</p>
                    <p>Sakarya Üniversitesi</p>
                    <p>Bilgisayar Mühendisliği Öğrencisi</p>
                </div>
                <div class="col-md-6">
                    <form method="POST" action="goruntule.php" id="iletisim" name="iletisim">
                        <div style="color:green" id="gonderildi"></div>
                        <div class="form-eleman">
                            <label>İsim</label>
                            <input type="text" name="isim" id="isim" class="form-control">
                            <div style="color:red;" id="isimdiv"> </div>
                        </div>

                        <div class="form-eleman">
                            <label>Soyisim</label>
                            <input type="text" name="soyisim" id="soyisim" class="form-control">
                            <div style="color:red;" id="soyisimdiv"> </div>
                        </div>
                        <div class="form-eleman">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                            <div style="color:red;" id="emaildiv"> </div>
                        </div>
                        <label>Cinsiyet</label>
                        <div class="form-eleman">

                            <input type="radio" id="erkek" name="cinsiyet" value="Erkek">
                            <label for="male">Erkek</label><br>
                            <input type="radio" id="kadin" name="cinsiyet" value="Kadın">
                            <label for="female">Kadın</label><br>
                            <div style="color:red;" id="cinsiyetdiv"> </div>
                        </div>
                        <div class="form-eleman">
                            <label>Ülke</label>
                            <select id="ulke" name="ulke">

                                <option value="Türkiye">Türkiye</option>
                                <option value="Amerika">Amerika</option>
                                <option value="İngiltere">İngiltere</option>
                                <option value="Diğer">Diğer</option>
                            </select>

                        </div>
                        <div class="form-eleman">
                            <label>Mesajınız</label>
                            <textarea class="form-control" id="message" name="mesaj" rows="5"></textarea>
                            <div style="color:red;" id="messagediv"> </div>
                        </div><br>
                        <div class="form-eleman">
                            <input type="submit" class="btn btn-primary" name="submit" value="Gonder" onclick="return Dogrula();">
                            <input type="reset" class="btn btn-primary" name="temizle" value="Temizle">
                            
                        </div>

                    </form>
                </div>
            </div>
        </div><br>


        
        






    </div>

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

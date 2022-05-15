<!doctype html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="text/css" href="IMG/favicon.ico">

    <title>Şehrim</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row text-start border-start border-end border-bottom border-secondary">
            <div class="col bg-color">
                <div class="btn">
                    <a href="Anasayfa.php" class="text-decoration-none text-light">
                        <h1>Mohamad GHASHIM</h1>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand navbar-dark bg-color">
        <div class="container-fluid">
            <a class="navbar-brand small" href="index.html" id="logo">Login</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars small"></i>
      </button>
            <div class="collapse navbar-collapse small" id="navbarNav">
                <ul class="navbar-nav small">
                    <li class="nav-item small">
                        <a class="nav-link  small" aria-current="page" href="Anasayfa.php">Anasayfa</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small" href="hakkımda.php">Hakkımda</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small" href="cv.php">Cv</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link active small" href="Sehirm.php">Şehrim</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small" href="miras.php">Miras</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small" href="ilgilanalarım.php">İlgi alanlarım</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small" href="ileitism.php">İletişim</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="container bg-color border">
        <div class="row ">
            <div class="col mx-auto  p-2">
                <div class="card">
                    <div class="card-img">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active ">
                                   <a href="#nerde"> <img src="IMG/halep haritasi.jpg" class="d-block w-100 card-img-top img-fluid" alt="halep"></a>
                                </div>
                                <div class="carousel-item">
                                  <a href="#nufus">  <img src="IMG/halep-haritasi-2.nufusu.jpg" class="d-block w-100 card-img-top img-fluid" alt="halep">
                                </div></a>
                                <div class="carousel-item">
                                  <a href="#Halep-gezilecek">  <img src="IMG/Halep-gezilecek.jpg" class="d-block w-100 card-img-top img-fluid" alt="halep"></a>
                                </div>
                                <div class="carousel-item">
                                  <a href="#halep-tekstil">  <img src="IMG/halep tesketil.jpg" class="d-block w-100 card-img-top img-fluid" alt="halep"> </a>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
                        </div>
                    </div>
                    <div class="card-body text-center bg-color">
                        
                    
                        <div class="card-title bg-secondary">
                            <h5>halep 2011 yılın Öncesi</h5>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row text-light">
            <div class="col mx-auto border text-center d-none d-md-block">
                <img src="IMG/halep haritasi 2.jpg" class="img-fluid p-2 sehrim-img">
            </div>
            <div class="col mx-auto border" id="nerde">

             <h1> Halep Suriye'de nerede?
 </h1>
             <p class="p-3">
                 Suriye'nin kuzeyinde yer almaktadır.

             </p>
            </div>

        </div>
        <div class="row text-light">
            <div class="col mx-auto border text-center d-none d-md-block">
                <img src="IMG/halep-haritasi-2.nufusu.jpg" class="img-fluid p-2 sehrim-img ">
            </div>
            <div class="col mx-auto border" id="nufus">

             <h1> Halep'in nüfusu kaçtır?
                </h1>
             <p class="p-3">
                 Halep'in nüfusu 2011'de 4,868,000 .<br> 
                 Suriye nüfusunun yüzde 22'sini oluşturuyor.

             </p>
            </div>

        </div>
        <div class="row text-light">
            <div class="col mx-auto border text-center d-none d-md-block">
                <img src="IMG/Halep-gezilecek.jpg" class="img-fluid p-2 sehrim-img">
            </div>
            <div class="col mx-auto border" id="Halep-gezilecek">

             <h1> Halep Gezilecek yerler
                </h1>
             <h3 class="p-2">
                Halep’teki en önemli gezi ve ziyaret yerlerinden bazıları şunlar:
             </h3>
             <ul>
                 <li>
                    <a href="miras.php"> Halep Kalesi</a>
                 </li>
                 <li>
                    Zekeriya a.s. Camii (Umeyyed Camii)           
                </li>
                 <li>
                     Halep Kapalı Çarşısı (Souq El Medine)
                 </li>
                 <li>
                     Bimaristan (Tedavi Merkezi) 
                 </li>
                 <li>
                     Cabar Kalesi (Qala’at Ja’abar)
                 </li>
                 <li>
                     Ebla Antik Kenti (Tell Mardikh)
                 </li>

             </ul>

            </div>

        </div>
        <div class="row text-light">
            <div class="col mx-auto border text-center d-none d-md-block">
                <img src="IMG/halep tesketil.jpg" class="img-fluid p-2 sehrim-img">
            </div>
            <div class="col mx-auto border" id="halep-tekstil">

             <h1> Halep'te sanayi
                </h1>
             <div class="p-2">
                <p>Halep, tekstil end&uuml;strileri, pamuk &ccedil;&#305;r&ccedil;&#305;r, defne sabunu, zeytinya&#287;&#305; end&uuml;strileri ve g&#305;da gibi eski ve iyi bilinen end&uuml;strileri ile bilindi&#287;i ve &uuml;nl&uuml; oldu&#287;u i&ccedil;in uzun zamandan beri sanayi &#351;ehirleri d&uuml;zeyinde tan&#305;nm&#305;&#351; ve &uuml;nl&uuml;d&uuml;r. end&uuml;striler. Halep Valili&#287;i, her t&uuml;rden modern, geli&#351;mi&#351; end&uuml;strilere ek olarak bir&ccedil;ok geleneksel &uuml;r&uuml;n ve end&uuml;stri t&uuml;r&uuml;yle &uuml;nl&uuml;d&uuml;r.</p>

                 <p>Bug&uuml;n Halep Valili&#287;i, &ouml;zellikle Halep, modern sanayilere sahip en &ouml;nemli Suriye ve Arap sanayi &#351;ehridir.</p>

               <p>Halep'teki modern end&uuml;striler aras&#305;nda:</p>
             </div>
             <ul>
                 <li>
                     Elektrikli Ev Aletleri Endüstrisi
                 </li>
                 <li>
                    Endüstriyel ekipman ve makine endüstrisi          
                </li>
                 <li>
                     tarım makineleri endüstrisi
                 </li>
                 <li>
                     Demir ve çelik endüstrisi
                 </li>
                 <li>
                     Otomobil karoseri endüstrisi
                 </li>
                 <li>
                      seramik endüstrisi
                 </li>

             </ul>

            </div>

        </div>


        
    </section>

    <footer class="container-fluid fixed-bottom">

        <div class="row  ">
            <div class="col align-self-end bg-white bg-opacity-50 mb-0 small ">

                <a class="text-decoration-none" href="mailto:mohamad.ghashim@ogr.sakarya.edu.tr">
                    <p class="small mb-1 " style="color: rgb(78, 76, 76);">@mohamad.ghashim@ogr.sakarya.edu.tr</p>
                </a>
            </div>
        </div>

    </footer>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
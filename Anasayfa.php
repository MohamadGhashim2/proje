<!doctype html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="text/css" href="IMG/favicon.ico">

    <title> Ana sayfa</title>
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
                        <a class="nav-link active small" aria-current="page" href="Anasayfa.php">Anasayfa</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small" href="hakkımda.php">Hakkımda</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small" href="cv.php">Cv</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small" href="Sehirm.php">Şehrim</a>
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

    <div class="container">



        <div class="row bg-color text-light mx-auto " style="height: 613px">
            <aside class="col-md-3  border bg-color  ">
                <div class="card bg-color ">
                    <img src="IMG/istanbul fatih after editing2.png" class="card-img-top rounded-circle img-fluid  " alt="profile picture">
                    <div class="card-body text-center p-2">
                        <h5 class="card-title">Mohamad Ghashim</h5>


                    </div>
                </div>
                <div class="small p-2">
                    <p class="text">Adım <span class="fw-bolder ">Mohamad GHASHIM</span></p>
                    <p>Yaş :<span class="fw-bolder"> 19</span></p>
                    <p>Ülke :<span class="fw-bolder"> Süriye</span></p>
                    <p>Üniversite Bölümü :<span class="fw-bolder">Bilgisayar Mühendislik</span></p>
                </div>

            </aside>
            <section class="col-md-9 bg-color border mx-auto p-3 ">
                <div class="d-block">
                    <h3>Kişisel web sayfama hoş geldiniz.</h3>
                </div>
                <div class="d-block m-2">
                    <h4>Benim <a href="hakkımda.php" class="text-decoration-none text-light "><u>Hakkımda</u></a> Okumak İstersen.</h4>
                </div>
                <div class="d-block m-2">
                    <h4> <a href="cv.php" class="text-decoration-none text-light "><u>CV'mi</u></a> okumak için.</h4>
                </div>
                <div class="d-block m-2">
                    <h4> <a href="Sehirm.php" class="text-decoration-none text-light "><u>Şehrimin</u></a> hakkında okumak için.</h4>
                </div>
                <div class="d-block m-2">
                    <h4>Şehrimdeki <a href="cv.php" class="text-decoration-none text-light "><u>Miras.</u></a> </h4>
                </div>
                <div class="d-block m-2">
                    <h4> Benimle <a href="cv.php" class="text-decoration-none text-light "><u>iletişime</u></a> geç. </h4>
                </div>
            </section>


        </div>


    </div>





    <footer class="container-fluid fixed-bottom">

        <div class="row  ">
            <div class="col align-self-end bg-white bg-opacity-50 mb-0 small ">

                <a class="text-decoration-none" href="mailto:mohamad.ghashim@ogr.sakarya.edu.tr">
                    <p class="small mb-1 " style="color: rgb(78, 76, 76);">@mohamad.ghashim@ogr.sakarya.edu.tr</p>
                </a>
            </div>
        </div>

    </footer>



</body>

</html>
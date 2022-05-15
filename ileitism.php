<!doctype html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="text/css" href="IMG/favicon.ico">

    <title>İletişim</title>
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
                        <a class="nav-link small" href="Sehirm.php">Şehrim</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small" href="miras.php">Miras</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link  small" href="ilgilanalarım.php">İlgi alanlarım</a>
                    </li>
                    <li class="nav-item small">
                        <a class="nav-link small active" href="ileitism.php">İletişim</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <section class="container border">
        <div class="row bg-color text-light " >
            <form action="" method="post"  name="form1" id="form1" onsubmit="required()">
                <div class="col mx-auto  text-center">
                   <h1 class="d-block">Benimle Konuş</h1> 
                   <div class="p-2">
                   <input type="text" name="ad" id="ad" placeholder="Name" class="text-dark d-block mx-auto ">
                   </div>
                   <div class="p-2">
                   <input type="email" name="email" id="email" placeholder="Email" class="text-dark d-block mx-auto ">
                   </div>
                   <div class="p-2">
                   <textarea placeholder="Messaj Yaz..."  name="textarea"class="text-dark  d-block mx-auto "></textarea>
                   </div>
                   <div class="p-2">
                       
                   
                   <input type="submit" name="submit" value="Gonder" class="text-dark d-inline mx-auto ">
                   <input type="reset" name="clear" value="clear"class="text-dark d-inline mx-auto ">
                   </div>

                   
                </div>



                
            </form>
           

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
    <script src="js/main.js"></script>

</body>

</html>
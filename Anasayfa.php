<!doctype html>

    <?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $username = $_POST["Username"];
    ;?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="text/css" href="IMG/favicon.ico">

    <title> Ana sayfa</title>
</head>
<body>
    
<section>
    <div class="Main-Text">
        <h3>About Me</h3>
    <br>
    <br>
    </div>
    
 
</section>
<aside>

    <div>
 <button type="button" onclick="document.location='Giris.html'"  class="Button-log" >Log In</button>
 <button type="button" onclick="document.location='Giris.html'" class="Button-log">Sign up</button>
 </div>
 
 <div class="welcome">
      <h2>
     Welcome <br><h4> <?php echo "$username";?></h4>
      </h2>     
 </div>
 <div class="welcome">
     <a href="Sehirm.php" class="link" > <h3>Şehirm</h3></a>
 </div>
 <div class="welcome">
     <a href="hobilerim.php" class="link" > <h3>Hobilerim</h3></a>
 </div>
 <div class="welcome">
     <a href="ileitism.php" class="link" > <h3>İletişim</h3></a>
 </div>




</aside>
<footer>
    <div id="footer-text">
        
    
     <p>®mohamad.ghashim@ogr.sakarya.edu.tr</p>
 </div>
</footer>

    


</body>
</html>

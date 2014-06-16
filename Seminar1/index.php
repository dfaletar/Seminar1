<?php 
 
$host="localhost"; 
$user="root"; 
$pass="root"; 
 
$link = mysql_connect ($host, $user, $pass) 
 or die ("Neuspjesno spajanje na server"); 
 
$link2=mysql_select_db ("sadrzaj",$link); 
 
mysql_query("SET CHARACTER SET utf8", $link); 
$upit=mysql_query("SELECT opis1, opis2 FROM opis NATURAL JOIN znamenitosti WHERE id=7;", $link); 
 
$a=mysql_result($upit,0,"opis1"); 
$b=mysql_result($upit,0,"opis2"); 
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>DWA - Firenca</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"; 

</head>
<body>
  <header class="site-header">
    <div class="row">
      <h1 class="logo"><a href="index.html"><img src="images/Firenza.png" alt=""></a></h1>
      
      <div class="naslov">
      <center><h1>Firenca</h1></center>
      </div>
    </div>
  </header>

  <section class="intro">
    <div class="row">
      <div class="intro-overlay">
        <div class="slide1">
    
          <p><strong><h1>Dobro došli na stranice Firence</h1></strong></p>
        </div>


        <!-- <div class="slide3">
          <h1>I na koncu treći slide.</h1>
          <p>On je očito zadnji u nizu.</p>
        </div> -->
      </div>
    </div>
  </section>

  

  
 
  <section class="clanak">
  <section class="gray-boxes row">
	<div class="column column-12">
	  <div class="column column-6">
		<h2>Dobro došli na stranice Firence</h2><br />
		
		<p><?php echo"$a"?></p><br />
		<p><?php echo"$b"?></p>
		
	  </div>
	
	<div class="desnoSlika column column-6">
	  <br /><br /><p><img src="images/firenca1.jpg" alt=""></a></h1> </p>
	  </div>
    </div>
	</section>	
	</section>
  
  <section class="gray-boxes row">
  <div class="row">
    <div class="column column-4">
	  <h2>Firentinska katedrala</h2>
      <a href="firentinska_katedrala.php"><img src="images/katedrala1.jpg" alt="Firentinska katedrala"></a>
    </div>

    <div class="column column-4">
      <h2>Galerija Uffizi</h2>
	  <a href="galerija_uffizi.php"><img src="images/galerija_uffizi.jpg" alt="Galerija Uffizi"></a>
	</div>

    <div class="column column-4">
      <h2>Palazzo Pitti</h2>
       <p><a href="palazzo_pitti.php"><img src="images/palazzo_pitti3.jpg" alt="Palazzo Pitti"></a>
    </div>
	</div>
  
  
  
	<div class="row">
    <div class="column column-4">
	  <h2>Ponte Vecchio</h2>
      <a href="ponte_vecchio.php"><img src="images/ponte_vecchio3.jpg" alt="Palazzo Vecchio"></a>
    </div>

    <div class="column column-4">
      <h2>Bazilika San Lorenzo</h2>
	  <a href="bazilika_san_lorenzo.php"><img src="images/bazilika_San_Lorenzo.jpg" alt="Bazilika San Lorenzo"></a>
	</div>

    <div class="column column-4">
      <h2>Bazilika Svetog Krsta</h2>
       <p><a href="bazilika_svetog_krsta.php"><img src="images/bazilika_SvKrsta3.jpg" alt="Bazilika Svetog Krsta"></a>
    </div>
	</div>

  </section>

  <footer class="site-footer">
    
	
	<div class="ikone row">
	<a href="index.html"><img src="images/home1.png" alt=""></a>
     <a href="https://www.facebook.com/pages/Firenze/245187018866070?fref=ts"><img src="images/facebook2.png" alt=""></a>
     <a href="https://www.youtube.com/watch?v=XDC3p8cWvw0"><img src="images/youtube.png" alt=""></a>
	 
    </div>
	
    <p>Copyright &copy; Dino Faletar</p>
  </footer>
</body>
</html>
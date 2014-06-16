<?php 
 
$host="localhost"; 
$user="root"; 
$pass="root"; 
 
$link = mysql_connect ($host, $user, $pass) 
 or die ("Neuspjesno spajanje na server"); 
 
$link2=mysql_select_db ("sadrzaj",$link); 
 
mysql_query("SET CHARACTER SET utf8", $link); 
$upit=mysql_query("SELECT opis1, opis2, opis3, opis4, opis5 FROM opis NATURAL JOIN znamenitosti WHERE id=6;", $link); 
 
$a=mysql_result($upit,0,"opis1"); 
$b=mysql_result($upit,0,"opis2");
$c=mysql_result($upit,0,"opis3"); 
$d=mysql_result($upit,0,"opis4"); 
$e=mysql_result($upit,0,"opis5"); 
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
      <center><h1>Bazilika Svetog Krsta</h1></center>
      </div>
    </div>
  </header>

  <section class="intro6">
    <div class="row">
      
    </div>
  </section>

  
  
  <section class="gray-boxes1 row">
	<div class="column column-12">
	  <div class="column column-6">
		<h2>Bazilika Svetog Krsta</h2>
		
		<p><?php echo"$a"?></p>
		
	    <p><?php echo"$b"?></p>
	  
	  </div>
	
	<div class="desnoSlika column column-6">
	  <br/><br/><p><img src="images/bazilika_SvKrsta1.jpg" alt=""></a></h1> </p>
	  </div>
    </div>
	</section>	
	
  <section class="clanak">	
  <section class="gray-boxes row">
    <div class="column column-12">
	  <div class="column column-6">
	  
	  <br/><p><img src="images/bazilika_SvKrsta2.jpg" alt=""></a></h1> </p>
	  </div>
	  <div class="column column-6">
	  <h2>Povijest gradnje</h2><br />
	  <p><?php echo"$c"?></p><br />
	  <p><?php echo"$d"?></p><br />
	  <p><?php echo"$e"?></p>
	</div>
    </div>
  </section>
  </section>
  
  
  
  <section class="gray-boxes row">
   <div class="wrapper row">
   
    <article class="column column-6">
	<h3>Osnovni podaci:</h3>
      <p>
	  <table>
		<tr>
			<th>Naziv:</th>
			<th>Bazilika of Santa Croce</th>
		</tr>
		<tr>
			<th>Adresa:</th>
			<th>Piazza Santa Croce, 16 Firenca</th>
		</tr>
	  </p>
</table> 
    </article>

    <aside class="column column-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2881.2066980629493!2d11.262267999999999!3d43.768567999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a540723ccc331%3A0x8f8279649c131255!2sBasilica+of+Santa+Croce!5e0!3m2!1shr!2shr!4v1395873908933" width="400" height="300" frameborder="0" style="border:0"></iframe><br /><small><a href="https://www.google.hr/maps/place/Basilica+of+Santa+Croce/@43.768568,11.262268,17z/data=!3m1!4b1!4m2!3m1!1s0x132a540723ccc331:0x8f8279649c131255" style="color:#6B1C10;text-align:left">Prikaz veće karte</a></small>	
	</aside>
	
	
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
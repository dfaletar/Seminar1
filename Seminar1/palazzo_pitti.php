<?php 
 
$host="localhost"; 
$user="root"; 
$pass="root"; 
 
$link = mysql_connect ($host, $user, $pass) 
 or die ("Neuspjesno spajanje na server"); 
 
$link2=mysql_select_db ("sadrzaj",$link); 
 
mysql_query("SET CHARACTER SET utf8", $link); 
$upit=mysql_query("SELECT opis1, opis2, opis3, opis4 FROM opis NATURAL JOIN znamenitosti WHERE id=3;", $link); 
 
$a=mysql_result($upit,0,"opis1"); 
$b=mysql_result($upit,0,"opis2");
$c=mysql_result($upit,0,"opis3"); 
$d=mysql_result($upit,0,"opis4"); 

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
      <center><h1>Palazzo Pitti</h1></center>
      </div>
    </div>
  </header>

  <section class="intro3">
    <div class="row">
      
    </div>
  </section>

  
  
  <section class="gray-boxes1 row">
	<div class="column column-12">
	  <div class="column column-6">
		<h2>Palazzo Pitti</h2>
		<p><?php echo"$a"?></p>
		
		<p><?php echo"$b"?></p>
	    
		
	  </div>
	
	<div class="desnoSlika column column-6">
	  <br/><br/><p><img src="images/palazzo_pitti1.jpg" alt=""></a></h1> </p>
	  </div>
    </div>
	</section>	
	
  <section class="clanak">	
  <section class="gray-boxes row">
    <div class="column column-12">
	  <div class="column column-6">
	  
	  <br/><p><img src="images/palazzo_pitti2.jpg" alt=""></a></h1> </p>
	  </div>
	  <div class="column column-6">
	  <h2>Zanimljivosti</h2><br />
	  <p><?php echo"$c"?></p><br />
	  <p><?php echo"$d"?></p>
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
			<th>Palazzo Pitti</th>
		</tr>
		<tr>
			<th>Adresa:</th>
			<th>Piazza de Pitti, 1 Firenca</th>
		</tr>
	  </p>
</table> 
    </article>

    <aside class="column column-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.369797102254!2d11.250272999999998!3d43.76518199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a515441db99f1%3A0x5cd0cce4e6f1502a!2sPitti+Palace!5e0!3m2!1shr!2shr!4v1395853461949" width="400" height="300" frameborder="0" style="border:0"></iframe><br /><small><a href="https://www.google.hr/maps/place/Pitti+Palace/@43.765182,11.250273,17z/data=!3m1!4b1!4m2!3m1!1s0x132a515441db99f1:0x5cd0cce4e6f1502a" style="color:#6B1C10;text-align:left">Prikaz veće karte</a></small>	
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
<?php 
 
$host="localhost"; 
$user="root"; 
$pass="root"; 
 
$link = mysql_connect ($host, $user, $pass) 
 or die ("Neuspjesno spajanje na server"); 
 
$link2=mysql_select_db ("sadrzaj",$link); 
 
mysql_query("SET CHARACTER SET utf8", $link); 
$upit=mysql_query("SELECT opis1, opis2, opis3, opis4, opis5, opis6, opis7, opis8, opis9 FROM opis NATURAL JOIN znamenitosti WHERE id=5;", $link); 
 
$a=mysql_result($upit,0,"opis1"); 
$b=mysql_result($upit,0,"opis2");
$c=mysql_result($upit,0,"opis3"); 
$d=mysql_result($upit,0,"opis4"); 
$e=mysql_result($upit,0,"opis5"); 
$f=mysql_result($upit,0,"opis6"); 
$g=mysql_result($upit,0,"opis7"); 
$h=mysql_result($upit,0,"opis8");
$i=mysql_result($upit,0,"opis9");  
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
      <center><h1>Bazilika San Lorenzo</h1></center>
      </div>
    </div>
  </header>

  <section class="intro5">
    <div class="row">
      
    </div>
  </section>

  
  
  <section class="gray-boxes1 row">
	<div class="column column-12">
	  <div class="column column-6">
		<h2>Bazilika San Lorenzo</h2>
		
		<p><?php echo"$a"?></p>
		
	    <p><?php echo"$b"?></p>
	  
	  </div>
	
	<div class="desnoSlika column column-6">
	  <br/><br/><p><img src="images/katedrala2.jpg" alt=""></a></h1> </p>
	  </div>
    </div>
	</section>	
	
  <section class="clanak">	
  <section class="gray-boxes row">
    <div class="column column-12">
	  <div class="column column-6">
	  
	  <br/><p><img src="images/krstionica.jpg" alt=""></a></h1> </p>
	  </div>
	  <div class="column column-6">
	  <h2>Povijest gradnje</h2><br />
	  <p><?php echo"$c"?></p><br />
	  <p><?php echo"$d"?></p>
	</div>
    </div>
  </section>
  </section>
  
  <section class="gray-boxes1 row">
	<div class="column column-12">
	  <div class="column column-6">
		<h2>Stara sakristija (Sagrestia Vecchia)</h2>
		<p><?php echo"$e"?></p>
		
	    <p><?php echo"$f"?></p>
	    
		<p><?php echo"$g"?></p>
	  </div>
	
	<div class="desnoSlika column column-6">
	  <br/><br/><p><img src="images/stara_sakristija.jpg" alt=""></a></h1> </p>
	  </div>
    </div>
	</section>	
	
  <section class="clanak">	
  <section class="gray-boxes row">
    <div class="column column-12">
	  <div class="column column-6">
	  
	  <br/><p><img src="images/nova_sakristija.jpg" alt=""></a></h1> </p>
	  </div>
	  <div class="column column-6">
	  <h2>Nova sakristija (Sagrestia Nuova)</h2><br />
	  <p><?php echo"$h"?></p><br />
	  <p><?php echo"$i"?></p>
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
			<th>Bazilika San Lorenzo</th>
		</tr>
		<tr>
			<th>Adresa:</th>
			<th>Piazza di San Lorenzo, 9 Firenca</th>
		</tr>
	  </p>
</table> 
    </article>

    <aside class="column column-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2880.8993065763602!2d11.253449!3d43.774949!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a5402f87d976b%3A0xeda7c032191812ec!2sBazilika+San+Lorenzo!5e0!3m2!1shr!2shr!4v1395870606723" width="400" height="300" frameborder="0" style="border:0"></iframe><br /><small><a href="https://www.google.hr/maps/place/Bazilika+San+Lorenzo/@43.774949,11.253449,17z/data=!3m1!4b1!4m2!3m1!1s0x132a5402f87d976b:0xeda7c032191812ec" style="color:#6B1C10;text-align:left">Prikaz veće karte</a></small>	
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
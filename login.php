<html>
<head>
<title>login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="index.css">
<!-----boxicons-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-----cdnjs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
</head>
<body> 

<!-----glide.js--->
<header class="header" id="header">
        <!--toopnav-->
    <div class="top-nav">
      <div class="container d-flex">
        <a href="signup.html">sign up</a>
          <ul class="d-flex">
            <a href="login.php">login</a>
          </ul>
      </div>
  </div>
       <!-----navigation-->
    <div class="navigation">
       <div class="nav-center container d-flex">
        <a href="/" class="logo"><h1>S.Girls</h1></a>


         <ul class="nav-list d-flex">
         <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
           <li class="nav-item"><a href="" class="nav-link">Shop</a></li>
           <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
           <li class="nav-item"><a href="carta.html" class="nav-link">Contact</a></li>
           
         </ul>
          
        
</div>
</div>


<div class="container">
<div class="login-form">
	<h1>Bienvenu dans l'espace admin </h1>
  
		<form action="login.php" method="POST" name="autentification">
		<label>Login</label>
<input type="text" name="login">
<label>Pass</label>
<input type="password" name="pass">
</table>
  <div class="buttons">
  <input type="submit" value="Envoyer"> &nbsp; &nbsp;<input type="reset" value="Effacer">
  </div>

</form><h5>Veuillez saisir votre Login et mot de passe</h5>
		</div>
	</div>
	



<?php
include('fonctions.php');
if(isset($_POST['login']) and isset($_POST['pass']))
{
	if($_POST['login']=='admin' and $_POST['pass']=='admin')
	         header( "location:admin.html");
	else
	{
	
		echo "<center> Mot de passe incorrect</center>";
	}
}
?>
<footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMATION</h4>
          <a href="">About us</a>
          <a href="">Contact Us</a>
          <a href="">Term & Conditions</a>
          <a href="">Shipping Guide</a>
        </div>
        <div class="col d-flex">
          <h4>USEFUL LINK</h4>
          <a href="">Online Store</a>
          <a href="">Customer Services</a>
          <a href="">Promotion</a>
          <a href="">Top Brands</a>
        </div>
        <div class="col d-flex">
          <span><i class='bx bxl-facebook-square'></i></span>
          <span><i class='bx bxl-instagram-alt' ></i></span>
          <span><i class='bx bxl-github' ></i></span>
          <span><i class='bx bxl-twitter' ></i></span>
          <span><i class='bx bxl-pinterest' ></i></span>
        </div>
      </div>
    </footer>
</body>
</html>
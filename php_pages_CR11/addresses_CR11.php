<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" author="Carina" content= "Adopt a pet">
	<meta name="viewport" content ="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../styles_CR11.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Adopt a pet</title>
</head>

<body>

<header>
		<div class="header_hero">
			<div class="hero_text"> Where we live </div>
		</div>

	<nav class="navbar navbar-expand navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" id="home" href="home_CR11.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          S&L and Seniors
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="seniors_CR11.php">Seniors</a>
          <a class="dropdown-item" href="general_CR11.php">Small and Large</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" style="color: green;" id="addresses" href="addresses_CR11.php"> Address list </a>
      </li>
    </ul>
  </div>

</nav>

	</header>

  <main>

  <div class="container">


<h1 id="h1_addresses"> Address list </h1>

<div id="adress_list">

<div class="row_adresses">

     <?php

      $db = mysqli_connect("localhost","root","","cr11_carina_petadoption"); 
      $sql = "SELECT name, address, zip_code, city FROM animal
      INNER JOIN location on fk_location_id = location_id";
      $result = $db->query($sql);
      while ($row=mysqli_fetch_assoc($result)) {



        printf(" <b><span style='color: green;'> %s </span></b>  %s | %s | %s <br>", 
                     $row["name"], $row["address"], $row["zip_code"], $row["city"]);
 }



?>

</div>

</div>

</div>

  </main>

 <footer>

  <div id="footer_div1">
  </div>

  <div id="footer_div2">
    <div class="footer_logo">Adopt a pet</div>
  </div>

  </footer>




</body>

<!-- "SELECT image, name, description, age, hobbies, city FROM animal
      INNER JOIN location on fk_location_id = location_id"; -->
</html>
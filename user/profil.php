<!--Si vous avez compris pourquoi cette ligne est  ici vous comprenez pourquoi php est un language bizare-->
<?php
	require('../functions/user_functions.php');
	$isCookie = isset($_COOKIE['session_id']);
	$cookie = $_COOKIE['session_id'];
	
	//Reccupere toutes les informations du User dans le cookie
	$userInfos = getUserInfos($cookie);
	

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Profile</title>
  <!--Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Ubuntu" rel="stylesheet">
  <!--CCS Stylsheet-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link rel="stylesheet" href="../css/welcome.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

  <section id="title">

    <!-- Nav Bar -->

<div class="container-fluid">
        <?php
                if($isCookie){
                        include '/var/www/html/projet/components/navbar-connected.php';
                } else {
                        include '/var/www/html/projet/components/navbar-not-connected.php';
                }
?>
<div class="row">

        <div class="col-lg-3">
		<img class="profile-picture" width=90%  src="https://avatarfiles.alphacoders.com/193/193523.jpg" >
	</div>

	<div class="col-lg-9">
	<h3><?php echo $userInfos['first_name']  ?> <?php  echo $userInfos['last_name']?></h3 >
	<h5><?php echo $userInfos['email'] ?></h5>
	<h5><?php echo $userInfos['phone_number']?></h5>
	<h5><?php echo $userInfos['ville']?></h5>
        </div>
      </div>

	</div>
</section>

<section id="features">
	<h3>Ma collection de vinyles </h3>
	<br/>
	<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://media.karousell.com/media/photos/products/2020/04/08/eminem_lp_vinyl_records_piring_hitam_1586333449_06dc71d5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Relapse</h5>
      <p class="card-text">Eminem.</p>
      <p class="card-text"><small class="text-muted">2006</small></p>
      <p class="card-text"><small class="text-muted">Disponible : 0</small></p>
    </div>
  </div>
  </div>
</div>
</section>

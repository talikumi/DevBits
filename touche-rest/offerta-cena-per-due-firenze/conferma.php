<?php
	if(isset($_GET['email'])) {
    $indirizzo = $_GET['email'];
	//echo $indirizzo;

	$email_to = "ninads@live.it";
    $email_subject = "Oggetto Landing Page";


    $email_message .= "Email: ".$_GET['email']."\n";
    $email_message .= "Offerta di partenza € 30";
		$email_message .= "1 Bottiglia di Vino: ".$_GET['valore1']."\n";
		$email_message .= "Cena: ".$_GET['valore2']."\n";
		$email_message .= "Totale: ".$_GET['Totale']."\n";




// create email headers
$headers = 'From: '.$_GET['email']."\r\n".
'Reply-To: '.$email_to."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
}



?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
	Hotel Dante - Offerta Weekend Firenze 2 Persone 70 € Dicembre 2018
	</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.css" rel="stylesheet">



  </head>

<body>
<a href="../index.php" class="brand">
	<img src="../images/logo.png" />
</a>
<div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="mp4/bg.mp4" type="video/mp4">
    </video>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">
			  Richiesta inviata con successo!</h1>
              <p class="mb-5">
			 Sarai ricontattato al più presto.
			  </p>

              <div class="input-group input-group-newsletter">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="list-unstyled-item">
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

  </body>

</html>

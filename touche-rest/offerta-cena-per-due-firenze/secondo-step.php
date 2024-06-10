
<?php if(isset($_GET['email'])) {

$indirizzo = $_GET['email'];
$lenght = strrpos($indirizzo, "@");
$name = substr($indirizzo, 0, $lenght);

} ?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Prenota Ora la Tua Cena Per Due Persone a Firenze a Soli € 30. Non Perdere Questa Offerta!">
    <meta name="author" content="">

    <title>
Ristorante Touché - Offerta Cena Per 2 Firenze € 30!
	</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.css" rel="stylesheet">

    <script type="text/javascript">

      function UpdateCost() {
        var sum = 30;
        var generanome, valoreelemento;
        for (i=0; i<=1; i++) {
          generanome = 'aggiornaprezzo'+i;
          valoreelemento = document.getElementById(generanome);
          if (valoreelemento.checked == true) { sum += Number(valoreelemento.value);
      	}
        }
        document.getElementById('totalcost').value = sum.toFixed(2);
      }

      </script>

</head>

<body>
<a href="../index.php" class="brand">
  Touché
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
              <span style="text-transform:uppercase; letter-spacing: 1.5px;">CIAO <?php print_r($name); ?>,</span>

              <hgroup>
                <h1 class="mb-3">
			  Personalizza la Tua Offerta!</h1>
          <h2 class="mb-6">Aggiungi Qualcosa</h2>
            </hgroup>
              <p class="mb-5">
			  <br />
			  A) 1 Bottiglia di Vino + € 20;<br />
			  B) Cena Per 4 Persone + € 40<br />

			  </p>

              <div class="input-group input-group-newsletter">
              <form action="conferma.php" method="get">

            <label for="aggiornaprezzo0">1 Bottiglia di Vino</label>
            <input name="valore1" type="checkbox" id="aggiornaprezzo0" onclick="UpdateCost()" value="20"  /> <br />

            <label for="aggiornaprezzo1">Cena per 4 Persone</label>
            <input name="valore2" type="checkbox" id="aggiornaprezzo1" onclick="UpdateCost()" value="40"  /> <br /><br />

            <input name="Totale" type="text" id="totalcost" class="testototale" value="30.00" size="8" disabled />

            <input type="email" class="form-control" value=<?php echo $indirizzo; ?> name="email"/>


                  <button class="btn btn-secondary" type="submit">Conferma Offerta</button>
                </div>
			  </form>

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

<?php
$melding = "";
$db = new PDO('mysql:host=localhost;dbname=projectherk',
    "root" . "");
if (isset($_POST["submit"])) {

    $naam = $_POST['naam'];
    $beschrijving = $_POST['besch'];
    $image = $_POST['img'];

    $query = $db->prepare("INSERT INTO prolang(naam, beschrijving, img) VALUES (:naam, :besch, :img)");

    $query->bindParam("naam", $naam);
    $query->bindParam("besch", $beschrijving);
    $query->bindParam("img", $image);

    if ($query->execute()) {
        $melding = "Gegevens zijn toegevoegd!";
    } else {
        $melding = "Er is een fout!";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Programs</title>
</head>
<body>
.
<!--header-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="index.php">PROGRAM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-light" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="toevoegen.php">toevoegen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div><img src="img/header.jpg" class="w-100" style="height: 200px; object-fit: cover;"></div>
<!--header-->
<div class="mx-5">
    <h1 class="my-3" style="margin-left: 250px">Voeg iets toe!</h1>
    <div>
        <form method="post">
            <div class="mb-2 w-75" style="margin-left: 250px">
                <label style="margin-right: 15px; margin-bottom: 15px">Naam:</label><br>
                <input type="text" class="w-75" name="naam">
            </div>
            <div class="mb-2 w-75" style="margin-left: 250px">
                <label style="margin-right: 35px; margin-bottom: 15px">Beschrijving:</label><br>
                <input type="text" class="w-75" name="besch">
            </div>
            <div class="mb-2 w-75" style="margin-left: 250px">
                <label style="margin-right: 35px; margin-bottom: 15px">Image pad:</label><br>
                <input type="text" class="w-75" name="img">
            </div>
            </div>
            <br>
            <input type="submit" name="submit" value="Verzenden" class="bg-dark rounded text-light mb-2" style="margin-left: 250px"> <?php echo $melding?></input>
        </form>
    </div>
</div>

<!--footer-->
<div class="row bg-dark pt-3">
    <div class="col text-light d-flex justify-content-center">
        <ul class="list-group">
            <li class="list-group-item fw-bold border-0 bg-dark text-light">Gemaakt in:</li>
            <li class="list-group-item border-0 bg-dark text-light" style="margin-top: -10px;">ROC mondriaan</li>
            <li class="list-group-item border-0 bg-dark text-light" style="margin-top: -10px;">Tinwerf 16</li>
            <li class="list-group-item border-0 bg-dark text-light" style="margin-top: -10px;">2544 ED Den Haag</li>
            <li class="list-group-item border-0 bg-dark text-light" style="margin-top: -10px;">ROCmondriaan@gmail.com</li>
            <li class="list-group-item border-0 bg-dark text-light" style="margin-top: -10px;">06-12345678</li>
        </ul>
    </div>
</div>
<!--footer-->
</body>
</html>
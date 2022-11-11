<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=projectherk',
    "root" . "");
$query = $db->prepare("select * FROM prolang");
$query->execute();
$language = $query->fetchAll(PDO::FETCH_ASSOC);


$array2 = array(
    $_SESSION['fname'] ,
    $_SESSION['lname'],
);
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
<!--header-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="home.php">PROGRAM</a>
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

<div class="d-flex justify-content-center">
    <div>
        <h1 class="pt-2">Goededag<?php
            foreach ($array2 as $data) {
                echo " $data". " ";
            }

            ?>
            en welkom bij Mijn PROGRAM website</h1>
        <i class="d-flex justify-content-center fst-normal">Deze website gaat over een bepaald aantal verschillende programmeer talen!</i>
        <p class="d-flex justify-content-center fst-italic">Programeren is nodig om elk soort computer te laten werken,<br>maakt niet uit hoe groot of het nou je telefoon is of je pc</p>
        <br>
    </div>
</div>

<div class="container pb-3">
    <div class="row d-flex justify-content-center">
            <?php foreach ($language as $taal) {
                echo "<div class='card w-25 px-2' style='margin: 5px'>";
                echo  '<img src="'.$taal['img'].'">' . "<br><br>" . $taal["naam"] . "<br><br>" . $taal["beschrijving"];
                echo '</div>';
                echo "<br>";}?>
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
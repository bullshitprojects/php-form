<?php
//Get data
$name = $_POST['name'];
$lastName = $_POST['lastname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$grade1 = (float)$_POST['grade1'];
$grade2 = (float)$_POST['grade2'];
$grade3 = (float)$_POST['grade3'];

//Name in uppercase
$nameUpperCase = strtoupper($name);
$nameUpperCase .= ' ';
$nameUpperCase .= strtoupper($lastName);

//Address in lowercase
$addressLowerCase = strtolower($address);

//Grades average
$average = number_format((($grade1 + $grade2 + $grade3) / 3), 2, '.', '');

//Associative array
$data = array(
  "Nombre" => $name,
  "Apellido" => $lastName,
  "Dirección" => $address,
  "Teléfono" => $phone,
);

//Check message length
$messageLength = strlen(trim($message));

//Grades in indexed array
$grades = array($grade1, $grade2, $grade3, $average);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="assets/favicon.png" />
  <link rel="stylesheet" href="assets/styles.css" />
  <title>Resultados</title>
</head>

<body>
  <main>
    <div class="results-container">
      <h1>Resultados</h1>
      <div class="results-container__data">
        <div class="card">
          <p class="text"><?php echo $nameUpperCase ?></p>
          <h4>Nombre en mayúsculas</h4>
        </div>
        <div class="card">
          <p class="text"><?php echo $addressLowerCase ?></p>
          <h4>Dirección en minúsculas</h4>
        </div>
        <div class="card">
          <p class="number"><?php echo $average ?></p>
          <h4>Promedio de notas</h4>
        </div>
        <div class="card">
          <p class="number"><?php echo $messageLength  ?></p>
          <h4>Cantidad de caracteres</h4>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
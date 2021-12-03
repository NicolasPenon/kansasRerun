<?php
include('functions.php');
$biz = getJson('json/firma1.json');

$company = array(
  "name" => "Firma A",
  "cvr" => 20202040,
  "adress" => "Fiktiv adr, 5",
  "postalcode" => 5000,
  "mail" => "firma1@info.dk",
  "phone" => 20202020,
  "totalpoints" => 55
);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bæredygtighedsscore</title>
  </head>
  <body>
    Bæredygtighedsscore for
    <?php
    echo $company['name'];
    ?>
    <br>Bæredygtighedsscore:
      <?php
    echo $company['totalpoints'];
      ?>
      <br> CO2 emission nedsat: 1 ton
      <br> Vand sparet: 5 liter
      <br> Energi sparet: 2500 kWh

  </body>
</html>

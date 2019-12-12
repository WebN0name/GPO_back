<?php

$path = ".";


function parth_year($arg)
{
  $arg = substr($arg, 13, 4);
  return $arg;
}

function parth_month($arg){
  $arg = substr($arg, 18, 2);
  if ($arg == "01") {
    $arg = "Январь";
} elseif ($arg == "02") {
    $arg = "Февраль";
} elseif ($arg == "03") {
    $arg = "Март";
}elseif ($arg == "04") {
    $arg = "Апрель";
}elseif ($arg == "05") {
    $arg = "Май";
}elseif ($arg == "06") {
    $arg = "Июнь";
}elseif ($arg == "07") {
    $arg = "Июль";
}elseif ($arg == "08") {
    $arg = "Август";
}elseif ($arg == "09") {
    $arg = "Сентябрь";
}elseif ($arg == "10") {
    $arg = "Октябрь";
}elseif ($arg == "11") {
    $arg = "Ноябрь";
}elseif ($arg == "12") {
    $arg = "Декабрь";
}
return $arg;
}

function parth_day(){

}

for($i = 0; $i<count($mass); $i++){
  echo parth_year($mass[$i]);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>GPO</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div id="map"></div>
    <div class="controllers-wrapper">
      <a class="btn" href="#">&laquo</a>
      <select id="months">
        <?php for($i = 0; $i<count($mass); $i++){?>
        <option value="<?php echo $mass[$i]?>"><?php echo parth_month($mass[$i])?> <?php echo parth_year($mass[$i])?> </option>
        <?php } ?>
      </select>
      <a class="btn" href="#">&raquo</a>
    </div>
    <script src="./assets/leaflet.min.js"></script>)
    <script src="./assets/leaflet-heat.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>

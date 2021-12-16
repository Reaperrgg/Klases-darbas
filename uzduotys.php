<?php
/*$ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
];
ksort($ceu);
foreach ($ceu as $key => $value) {
    echo $key . '=' . $value . '<br>';
}
ksort($ceu);
for ($i = 0,$iMax=count($ceu); $i<$iMax; $i+=4) {
    echo $key . '=' . $value . '<br>';
}
foreach ($ceu as $valstybes => $sostines){
    if(
        str_contains ($valstybes, 'A')
       || str_contains($sostines,'A')
) {
        echo $valstybes .'=' . $sostines . '<br>';
    }

}

$temp = [
    78,
    60,
    62,
    68,
    71,
    68,
    73,
    85,
    66,
    64,
    76,
    63,
    75,
    76,
    73,
    68,
    62,
    73,
    72,
    65,
    74,
    62,
    62,
    65,
    64,
    68,
    73,
    75,
    79,
    73
];
$suma= 0;
foreach ( $temp as $dienosTemp) {
    $suma += $dienosTemp;
}
$vidurkis = $suma / count($temp);
echo "Temperatura:";
spausdintiGrafikai($temp,count($temp));

echo "Vidutine temperatura: $vidurkis";

rsort($temp);
echo "<br> Penkios auksciausios:";
spausdintiGrafikai($temp,5);

rsort($temp);
echo "Penkios zemiausios:";
spausdintiGrafikai($temp,5);

function spausdintiPirmusElementus(array $temp,$kiek):void{
    $i = 0;
    foreach ($temp as $value){
        if($i < $kiek){
            echo " ".$value;
        }
    }
}*/
include 'konvertavimas.php';
include 'konvert.php';


$x = 5;
$y = 6;

printf('Kintamuju $x ir $y sudetis:');
echo($x + $y);
echo '<br>';
printf('Kintamuju $x ir $y atimtis:');
echo($x - $y);
echo '<br>';
$mas = ['jonas' => 15, 'kestas' => 22, 'petras' => 'Petraitis'];
printf("Masyvas:");
ctype_print($mas);
array($mas, 'mano');
echo "<br>";
echo "100 km in myles:" .konvertuoti(100, 'mylios');
echo "<br>";
echo "62.1371 km in myles:".konvertuoti(62.1371, 'kilometrai');

printf('Kintamuju $x ir $y sudetis:');
echo($x + $y);
echo '<br>';
printf('Kintamuju $x ir $y atimtis:');
echo($x - $y);
echo '<br>';
$mas = ['jonas' => 15, 'kestas' => 22, 'petras' => 'Petraitis'];
printf("Masyvas:");
ctype_print($mas);
array($mas, 'mano');
echo "<br>";
echo "100 kg in svarai:" .konvertuoti(100, 'mylios');
echo "<br>";
echo "62.1371 kg in svarai:".konvertuoti(62.1371, 'kilometrai');







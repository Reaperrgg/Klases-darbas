<?php
/*session_start();
if(isset($_SESSION['arPrisijunges'])){
    echo "matome slaptus duomenis:)";
}else {
    header("Location: http://localhost/loginform.php");
}
*/
include 'Car.php';

$car = new Car();

$car->spalva = 'raudona';
$car->greitis = '100kmph';
$car->dureles = "4";


echo $car->gautiSpalva();
echo '<br>';
$car->vaziuoti();
echo'<br>';
$car->dureles();
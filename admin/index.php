<?php
/*session_start();
if(isset($_SESSION['arPrisijunges'])){
    echo "matome slaptus duomenis:)";
}else {
    header("Location: http://localhost/loginform.php");
}
*/
include 'admin/Car.php';

$car = new Car();

$car->spalva = 'raudona';
$car->greitis = '100kmph';

echo $car->gautiSpalva();

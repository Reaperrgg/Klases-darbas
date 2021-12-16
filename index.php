<?php
session_start();
if(isset($_SESSION['arPrisijunges'])){
    echo "matome slaptus duomenis:)";
}else {
    header("Location: http://localhost/loginform.php");
}
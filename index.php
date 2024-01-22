<?php 

// $value = 'Witam';
// setcookie("TestCookie", $value, time()+3600);

// echo $_COOKIE["TestCookie"];
// print_r($_COOKIE);

// setcookie("TestCookie", $value, time()-3600);

// session_start();
// $_SESSION["login"]="edek";

session_start();
if (@$_SESSION["num_visits"]>1) {
        echo "Data ostatniej wizyty: ";
        echo date("j F Y, H:i:s", $_SESSION["last_visit"]);
        echo "<br>";
        echo "Liczba wizyt: " . $_SESSION["num_visits"];
}
else{
    echo "To jest Twoja pierwsza wizyta";
    $_SESSION["num_visits"]=1;
}

$_SESSION["last_visit"]=time();
$_SESSION["num_visits"]++;
?>
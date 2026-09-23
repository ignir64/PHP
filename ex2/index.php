<?php

$test = explode('.', $_SERVER['REMOTE_ADDR'])[0];
echo "$test<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";

if ($test < '128') {
    echo "(CLASSE A)";
}
elseif ($test < '197') {
    echo "(CLASSE B)";
}
else
    echo "(CLASSE C)";

?>
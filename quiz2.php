<?php

$jenis ="motor";
$merek ="Suzuki";

if($jenis == "motor" && $merek == "Suzuki")
{
    echo "kondisi 1<br>";
}
elseif($jenis == "motor" || $merek == "Suzuki")
{
    echo "kondisi 2<br>";
}

?>
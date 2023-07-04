<?php
$renkler = ["red", "blue", "Cyan", "green", "yellow", "Olive", "Aqua", "Beige", "Tomato ", "SkyBlue"];
$satir = $_GET["satir"]??'0';
$sutun = $_GET["sutun"]??'0';
echo "<table border=1 align=center cellspacing=5 cellpadding=5>";
for ($i = 1; $i <= $satir; $i++) {
    echo "<tr>";
    for ($a = 1; $a <= $sutun; $a++) {
        $random = rand(0,9);
        echo "<td style=background-color:" . $renkler[$random] . ">$i-$a</td>";
    }
    echo "</tr>";
}
echo "</table>";

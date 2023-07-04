<?php

$link =  $_GET["link"] ?? 'main';
switch ($link) {
    case "about":
        $baslik = "Hakkımızda";
        $d = $link;
        break;
    case 'iletisim':
        $baslik = "İletişim";
        $d = $link;
        break;
    case "galeri":
        $baslik = "Galeri";
        $d = $link;
        break;
    case 'dongu':
        $baslik = "Döngü";
        $d = $link;
        break;
    default:
        $baslik = "AnaSayfa";
        $d = "main";
        break;
}
?>
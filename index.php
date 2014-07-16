<?php

function iyelikEkle($kelime,$soneEkle='', $bicimlendir=false)
{
    $encoding = 'UTF-8';
    $baglac = "'";
    $sonHarf  =  substr(mb_strtolower($kelime,$encoding),-1); // Son harfi alma
    $sonHarfAlternatif =  substr(mb_strtolower($kelime,$encoding),-2,1); // Sondan bir önceki harfi alma
    $sesliHarfler = 'aeıioüuü'; // Sesli harfler

    // Son Harf sesli sessiz kontrol
    if(strrchr($sesliHarfler, $sonHarf)) {
        $kontrolHarf = $sonHarf;
        $iyelikEki = array('nın','nin','nun','nün');
    }else { // Son harf içinde sesli harfler yoksa sonran bir önceki harf kontrol edilir
        $kontrolHarf = $sonHarfAlternatif;
        $iyelikEki = array('ın','in','un','ün');
    }

    // Son harfe göre iyelik ekleme
    switch($kontrolHarf) {
        case "a":
        case "ı":
            $iyelik = $iyelikEki[0];
            break;
        case "e":
        case "i":
            $iyelik = $iyelikEki[1];
            break;
        case "o":
        case "u":
            $iyelik = $iyelikEki[2];
            break;
        case "ö":
        case "ü":
            $iyelik = $iyelikEki[3];
            break;
        default:
            $iyelik = 'nın';
            break;
    }

    $_kelime = "{$kelime}{$baglac}{$iyelik} {$soneEkle}";

    switch($bicimlendir) {
        case "k": // Küçük döndür
            $_kelime = mb_strtolower($_kelime,$encoding);
            break;
        case "b": // Büyük döndür
            $_kelime = mb_strtoupper($_kelime,$encoding);
            break;
        case "i": // Büyük döndür
            $_kelime = ucfirst(mb_strtolower($_kelime,$encoding));
            break;
    }


    return $_kelime;
}
?>

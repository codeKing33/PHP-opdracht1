<?php
function badWordsfilter ($x){
    $originals = array("klootzak", "Klootzak", "hoer", "Hoer", "kanker", "Kanker", "pooier", "Pooier");
    $replacement = "&@9%!#*";
    $x = str_ireplace($originals, $replacement, $x);
    return $x;
}
?>
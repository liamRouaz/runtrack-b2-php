<?php
function my_str_search($letter, $string) {
    $letter = (string) $letter;
    $string = (string) $string;

    return substr_count($string, $letter);
}

$lettre = 'a';
$chaine = 'ananas';
echo my_str_search($lettre, $chaine); 
?>

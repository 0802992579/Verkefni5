<?php
function clean($string) {
    $string = trim($string);
    // Remove multiple adjacent spaces
    while (strstr($string, "  ")) {
      $string = str_replace("  ", " ", $string);
    }
    $string = strtolower($string); //every thing to lowercase
    $string = ucfirst($string); //first letter ot uppercase
    $string = stripslashes($string); // removes \
    $string = strip_tags($string);//removes tags
    return $string;  
}

function clean_int($string) {
    $string = clean($string);
    if (is_int($string))
    {return $string;}
    else
    {return 0;}
}

function cleanurl($string) {
    $string = trim($string);
    while (strstr($string, "  ")) {
       $string = str_replace("  ", " ", $string);
    }
    $string = strtolower($string); //every thing to lowercase
    $string = stripslashes($string); // removes \
    $string = strip_tags($string);//removes tags
    return $string;
}



?>



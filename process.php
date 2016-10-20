//ef ekkert gildi 0,""
//h?markslengd
//is_bool(), is_float(), is_numberic(), 
//if ( strlen( $_POST[ ?comment? ] ) <= 256 )
//if empty() ?? gera eitthva? 


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




if(isset($_POST['submit'])){

/*--------------------------------------------------------------
Fetch name value from URL and Sanitize it
--------------------------------------------------------------*/
if($_POST['name'] != "") {$name =clean($_POST['name']); }

}
?>



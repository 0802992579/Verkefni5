<footer>
       <p>&copy; 
<?php 
$startYear = 20015; 
$thisYear = date('Y'); 
if ($startYear == $thisYear) {   
 	echo $startYear;
 } else {    
echo "{$startYear}&ndash;{$thisYear}";
 } 
?> 
Ólafur Ásdísarson</p>
</footer>
<?php 

/* donnees distante sous format string */

$string = "tijani, iliass, sanae, ayman"; 

$names = explode(", ",$string);

echo "<pre>";
print_r($names);

$imploded = implode("|",$names);

print_r($imploded);


<?php

$names = array('tijani','abdellatif','youcode');
$cities = ['rabat','casa','youssoufia'];


echo '<pre>';
print_r($names);
print_r($cities);

echo '<br />';

var_dump($names);

for($i=0;$i<count($names);$i++){
   
    echo '<br />'.'L\'index : '. $i.' contient les infos suivant : '. $names[$i].'<br />';

}

echo '<br />';

echo "<ol>";

foreach($cities as $city){

      echo '<li>' . $city . '</li>';
}
echo "</ol>";


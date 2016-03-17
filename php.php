<?php

$a = ['h', 'e', 'l', 'l', 'o'];

for ($i=0; $i<count($a); $i++) {

}

$reversed = array();
for ($i=count($a)-1; $i>=0; $i--){
    $reversed[] = $a[$i];
}

for ($i=0; $i<count($a); $i++){
    array_unshift($reversed, $a[$i]);
}


for ($i=0; $i<count($reversed); $i++){
    echo $reversed[$i];
}
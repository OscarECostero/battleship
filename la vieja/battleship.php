<?php

$jugador=uno;
const LIBRE='';


$table1=array();
$table1[]=array(LIBRE,LIBRE,LIBRE,LIBRE,LIBRE,LIBRE);
$table1[]=array(LIBRE,LIBRE,LIBRE,LIBRE,LIBRE,LIBRE);
$table1[]=array(LIBRE,LIBRE,LIBRE,LIBRE,LIBRE,LIBRE);
$table1[]=array(LIBRE,LIBRE,LIBRE,LIBRE,LIBRE,LIBRE);
$table1[]=array(LIBRE,LIBRE,LIBRE,LIBRE,LIBRE,LIBRE);

$table=array();
$table[]=array(LIBRE,LIBRE,b,LIBRE,LIBRE,LIBRE);
$table[]=array(LIBRE,LIBRE,LIBRE,LIBRE,LIBRE,LIBRE);
$table[]=array(LIBRE,LIBRE,LIBRE,LIBRE,LIBRE,LIBRE);
$table[]=array(LIBRE,LIBRE,LIBRE,LIBRE,LIBRE,LIBRE);
$table[]=array(LIBRE,LIBRE,LIBRE,LIBRE,LIBRE,LIBRE);


function winner($table){
    foreach($table as $line){
        foreach($line as $position){
            if($position != LIBRE){
                return false;

            }
        }
    }
    return true;
};
function newPosition(){
    return array(
        rand(0,2),rand(0,2));
};

echo '<pre>';
foreach($table as $line) {
    echo $line[0] . ' - ' . $line[1] . ' - ' . $line[2] . ' - ' . $line[3] . ' - ' . $line[4] . "\n";
}
echo '</pre>';


echo '<pre>';
foreach($table1 as $line) {
    echo $line[0] . ' - ' . $line[1] . ' - ' . $line[2] .  ' - ' . $line[3] . ' - ' . $line[4] ."\n";
}
echo '</pre>';

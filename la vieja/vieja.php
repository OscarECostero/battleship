<?php

const LIBRE='';
const CIRCULO='O';
const CRUZ='X';

$table=array();
$table[]=array(LIBRE,LIBRE,LIBRE);
$table[]=array(LIBRE,LIBRE,LIBRE);
$table[]=array(LIBRE,LIBRE,LIBRE);

$jugadoractivo=CRUZ;

function lleno($table){
    foreach($table as $line){
        foreach($line as $position){
            if($position== LIBRE){
                return false;

            }
        }
    }
    return true;
};
function winner($table){
    for ($i=0; $i <=2 ; $i++) { 
        if($table[$i][0]!=LIBRE and $table[$i][0]==$table[$i][1] and $table[$i][1]==$table[$i][2]){
            return true;
        }
        if($table[0][$i]!=LIBRE and $table[0][$i]==$table[1][$i] and $table[1][$i]==$table[2][$i]){
            return true;
        }
    } return false;


}
function newPosition(){
    return array(
        rand(0,2),rand(0,2));
};

$jugadorActivo = CRUZ;
 

while (!lleno($table) && !winner($table) ) {
    
    $position = newPosition();
    
 

    if ( $table[ $position[0] ][ $position[1] ] != LIBRE ) {
        
    } else {
        
        $table[ $position[0] ][ $position[1] ] = $jugadorActivo;

        if ($jugadorActivo == CRUZ) {
            $jugadorActivo = CIRCULO;
        } else {
            $jugadorActivo = CRUZ;
        }
    }
}

echo '<pre>';
foreach($table as $line) {
    echo $line[0] . ' - ' . $line[1] . ' - ' . $line[2] . "\n";
}
echo '</pre>';

?>
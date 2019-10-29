<?php



for($i=2; $i <=1000; $i++){ 
    $compteur = 0;
    for ($j=1;$j<=$i;$j++){
        if (($i%$j)==0){
            $compteur++;
        }
    }
    if ($compteur == 2){
        echo $i."<br/>";
    }
}



?>

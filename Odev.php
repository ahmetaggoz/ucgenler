<?php

function ucgenCiz($n){
    for ($i = 0; $i<=$n; $i++){
        echo "<br>";
        $k=1;
        while ($k<=$i+1){
            echo "*";
            $k++;
        }
    }
}

ucgenCiz(25);
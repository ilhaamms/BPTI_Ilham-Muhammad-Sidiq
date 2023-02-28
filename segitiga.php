<?php

function segitigaTerbalik(int $n){
	for($i = 1; $i <= $n; $i++){
        for($j = 1; $j < $i; $j++){
            echo " ";
        }
        for($k = $n; $k >= (2*$i - $n); $k--){
            echo "*";
        }
        echo "\n";
    }
}

segitigaTerbalik(5);

?>
<?php

function contador($inicio=0, $fim=10, $incremento=1) {
    for  ($i=$inicio=0;$i<=$fim;$i=$i+$incremento=1)
    {
        echo $i,   '> ';
    }
    echo $fim;
    
}

contador();
contador(5, 15, 2);

?>



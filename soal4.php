<?php

    $height = 7;
    $width = 5;
    draw($height,$width);

    function draw($height,$width){
        
        if($height % 2 != 0 && $width % 2 != 0){
            for($row=0;$row<$height;$row++){
                for($column=0;$column<$width;$column++){
                    if($column==0 || $column==$width-1 || $row== round($height/2)-1){
                        echo "*";
                    }
                    else{
                        echo "=";
                    }
                    
                }
                echo"<br>";
            }

        }else{
            echo "input harus ganjil";
        }

    }

?>
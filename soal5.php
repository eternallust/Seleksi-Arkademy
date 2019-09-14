<?php

    $input=5;
    generateString($input);
    
    function generateString($input){

        $generatedCharLength=32;
        $char="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        
        $array = array();

        for($i=0;$i<$input;$i++){
            $generatedText = substr(str_shuffle($char),0,$generatedCharLength-1); 
            if($array==null){
                array_push ($array,$generatedText);
            }else{
                for($cek=0;$cek<count($array);$cek++){
                    if($array[$cek]==$generatedText){
                        $cek=0;
                        $generatedText = substr(str_shuffle($char),0,$generatedCharLength-1); 
                    }
                }
                array_push ($array,$generatedText);
            }
        }
        

        foreach($array as $result){
            echo"$result";
            echo"<br>";
        }
        
    }

?>
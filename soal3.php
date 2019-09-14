<?php

    $word = "banananana";
    $input = "nana";

    searchWord($word,$input);

    function searchWord($word,$input){
        
        $totalAlphabetWord = strlen($word);
        $totalAlphabetInput = strlen($input);
        $result = 0;

        if($totalAlphabetWord>=$totalAlphabetInput){
            for($i=0;;$i++)
            {
                $cek=$totalAlphabetWord-$i;
                if($cek>=$totalAlphabetInput){
                    if(substr($word,$i,$totalAlphabetInput)==$input)
                    {
                        $result++;
                    }
                }else{
                    break;
                }
            }

            $reverseWord = strrev($word);

            for($i=0;;$i++)
            {
                $cek=$totalAlphabetWord-$i;
                if($cek>=$totalAlphabetInput){
                    if(substr($reverseWord,$i,$totalAlphabetInput)==$input)
                    {
                        $result++;
                    }
                }else{
                    break;
                }
            }
            echo "ditemukan $result kali"; 
        }
        else{
            echo "panjang kata yang dicari tidak boleh lebih banyak dari kata";
        }
       
    }

?>
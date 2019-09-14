<?php

    $username ="Babang12";
    $password ="Baban@(gcikokucing12";

    function validateUsername($username){

        $firstAlphabet = substr($username,0,1);
        $checkNumberAndChar = preg_match('@[0-9] | [#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]@', $firstAlphabet);
        $uppercase = preg_match('@[A-Z]@', $username);
        $lowercase = preg_match('@[a-z]@', $username);
        $number    = preg_match('@[0-9]@', $username);

        if (!$checkNumberAndChar && $uppercase && $lowercase && $number && strlen($username)>=5 && strlen($username)<=9) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

    function validatePassword($password){
        $containAt = preg_match('[@]',$password);
        $character = preg_match('@[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        
        if ($character && $containAt && $uppercase && $lowercase && $number && strlen($password)>=8) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    // untuk nguji aja

    // if(validateUsername($username)){
    //     echo "bener ";
    // }else{
    //     echo "salah ";
    // }
    // if(validatePassword($password)){
    //     echo "bener";
    // }else{
    //     echo "salah";
    // }

?>
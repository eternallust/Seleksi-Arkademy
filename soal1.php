<?php
    class School{
        public $schoolName;
        public $yearIn;
        public $yearOut;
        public $major;
    }
    class skill{
        public $skillName;
        public $level;
    }

    $myName = "Rizky Abdulrachman";
    $myAge = 25;
    $myAddress ="Bandung";
    $myHobies = array ("Sepak Bola","Badminton");
    $maried = FALSE;

    $mySchool = new School();
    $mySchool->schoolName ="SMK Negeri 11 Kota Bandung";
    $mySchool->yearIn ="2010";
    $mySchool->yearOut="2013";
    $mySchool->major=NULL;

    $mySkill = new skill();
    $mySkill->skillName = array("PHP","Android JAVA","ASP C#","ASP.NET");
    $mySkill->level = array("Intermediate","Beginner","Intemediate","Intermediate");

    $selfInterest = TRUE;
    
    createJSON($myName, $myAge, $myAddress, $myHobies, $maried, $mySchool, $mySkill, $selfInterest);

    function createJSON($name, $age, $address, $hobies, $isMaried, $listSchool, $skills, $interestInCoding){

        $myBiodata = new \stdClass();
        $myBiodata->name = $name;
        $myBiodata->age = $age;
        $myBiodata->address = $address;
        $myBiodata->hobies = $hobies;
        $myBiodata->school = $listSchool;
        $myBiodata->skills = $skills;
        $myBiodata->interestInCoding = $interestInCoding;
        
        echo json_encode($myBiodata);

    }
?>
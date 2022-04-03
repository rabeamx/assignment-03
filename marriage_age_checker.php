<?php

function getMarriageAge (string $name, int $birth_year, string $gender){

    $age = date('Y') - $birth_year;

    switch($gender){
        case'female':
            $marriage_age = 18;
            break;
        case'male':
            $marriage_age = 21;
            break;
        default:
            $marriage_age = 21;
            break;

    }

    if($age >= $marriage_age){
        return "Hi {$name}, You are welcome.";
    }else {
        $wait_year = $marriage_age - $age;
        return "<span style=\" font-weight:bold; color:#9D00FF; font-size:25px;\">We are sorry {$name}, you are {$age} years old. You have to wait {$wait_year} years to get married.</span>"; 
    }
}

?>
<?php

// currency converter basic

function getValue(int $amount = null, string $type = null) {

    $rate = null;

switch($type){
    case 'dollar':
        $rate = 86.38;
        break;
    case 'pound':
        $rate = 113.19;
        break;
    case 'cad':
        $rate = 68.98;
        break;
    case 'euro':
        $rate = 95.41;
        break;
    case 'won':
        $rate = 0.071;          
        break;
    default :
        $rate = 'undefined';
        break;
}  

    $bdt = $amount * $rate;

    return "<span style=\" font-weight:bold; color:#9D00FF; font-size:25px;\">{$amount} {$type} = {$bdt} tk</span>";

}

// currency converter advanced

function currencyAdv($amount = null, $type = null, $convert = null) {

    $rate = null;

switch($type){

    case 'dollar':
        $rateT = 1;
        break;
    case 'pound':
        $rateT = 1;
        break;
    case 'cad':
        $rateT = 1;
        break;
    case 'euro':
        $rateT = 1;
        break;
    case 'won':
        $rateT = 1;          
        break;
    case 'tk':
        $rateT = 1;          
        break;
    } 

    if($type == $convert){
        return setAlert('Not Allowed!', 'warning');
    } else{

        if($type == 'dollar'){

            switch($convert){
                case 'dollar':
                    $rateC = 1;
                    break;
                case 'pound':
                    $rateC = 0.76;
                    break;
                case 'cad':
                    $rateC = 1.25;
                    break;
                case 'euro':
                    $rateC = 0.91;
                    break;
                case 'won':
                    $rateC = 1214.37;         
                    break;
                case 'tk':
                    $rateC = 86.37;          
                    break;
            }
    
        } elseif($type == 'pound'){
    
            switch($convert){
                case 'dollar':
                    $rateC = 1.31;
                    break;
                case 'pound':
                    $rateC = 1;
                    break;
                case 'cad':
                    $rateC = 1.64;
                    break;
                case 'euro':
                    $rateC = 1.19;
                    break;
                case 'won':
                    $rateC = 1593.47;         
                    break;
                case 'tk':
                    $rateC = 113.36;          
                    break;
            }
    
        } elseif($type == 'cad'){
    
            switch($convert){
                case 'dollar':
                    $rateC = 0.80;
                    break;
                case 'pound':
                    $rateC = 0.61;
                    break;
                case 'cad':
                    $rateC = 1;
                    break;
                case 'euro':
                    $rateC = 0.73;
                    break;
                case 'won':
                    $rateC = 971.88;         
                    break;
                case 'tk':
                    $rateC = 69.17;          
                    break;
            }
    
        } elseif($type == 'euro'){
    
            switch($convert){
                case 'dollar':
                    $rateC = 1.10;
                    break;
                case 'pound':
                    $rateC = 0.84;
                    break;
                case 'cad':
                    $rateC = 1.38;
                    break;
                case 'euro':
                    $rateC = 1;
                    break;
                case 'won':
                    $rateC = 1339.69;         
                    break;
                case 'tk':
                    $rateC = 95.33;          
                    break;
            }
    
        } elseif($type == 'won'){
    
            switch($convert){
                case 'dollar':
                    $rateC = 0.00082;
                    break;
                case 'pound':
                    $rateC = 0.00063;
                    break;
                case 'cad':
                    $rateC = 0.0010;
                    break;
                case 'euro':
                    $rateC = 0.00075;
                    break;
                case 'won':
                    $rateC = 1;         
                    break;
                case 'tk':
                    $rateC = 0.071;          
                    break;
            }
    
        } elseif($type == 'tk'){
    
            switch($convert){
                case 'dollar':
                    $rateC = 0.012;
                    break;
                case 'pound':
                    $rateC = 0.0088;
                    break;
                case 'cad':
                    $rateC = 0.014;
                    break;
                case 'euro':
                    $rateC = 0.010;
                    break;
                case 'won':
                    $rateC = 14.07;         
                    break;
                case 'tk':
                    $rateC = 1;          
                    break;
            }
    
        }
    }

    $convertRate = $amount * $rateC * $rateT;

    return "<span style=\" font-weight:bold; color:#9D00FF; font-size:25px;\">{$amount} {$type} = {$convertRate} {$convert}</span>";
    
}

?>
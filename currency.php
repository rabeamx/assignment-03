<?php

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

// function currencyAdv(int $amount = null, int )

function currencyAdv($amount = null, $type = null, $convert = null) {

    $rate = null;

switch($type){

    case 'dollar':
        $rateT = 86.38;
        break;
    case 'pound':
        $rateT = 113.19;
        break;
    case 'cad':
        $rateT = 68.98;
        break;
    case 'euro':
        $rateT = 95.41;
        break;
    case 'won':
        $rateT = 0.071;          
        break;
    } 

switch($convert){

    // $convertRate = $amount * $convert;

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
} 

    $convertRate = $amount * $rate * $rateT;

    return "<span style=\" font-weight:bold; color:#9D00FF; font-size:25px;\">{$amount} {$type} = {$convertRate}{$convert}</span>";
    
}

?>
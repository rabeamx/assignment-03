<?php

function getArea(string $type = null, int $length = null, int $width = null){

    switch($type) {

        // in some cases $width = $length

        case 'rectangular':
            $area = $length * $width;
            break;
        case 'square':
            $area = $length * $width;
            break;
        case 'triangle':
            $area = ($length * $width) / 2;
            break;
        case 'circle':
            $area = 3.1416 * $length *$width;
            break;
        default:
            $area = 'undefined';
            break;
    }

    return "<span style=\" font-weight:bold; color:#9D00FF; font-size:25px;\">{$area}</span>";

}

?>
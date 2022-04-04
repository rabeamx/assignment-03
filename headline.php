<?php

function setHeading($title= null, $type = null, $fc = null, $fs = null, $fw = null, $tt = null, $ff = null ){

    return "<{$type} style=\" color:{$fc}; font-size:{$fs}; font-weight:{$fw}; text-transform:{$tt}; font-family:{$ff}; \">{$title}</{$type}>";

}

?>
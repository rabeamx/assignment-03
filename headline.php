<?php

function setHeading($title= null, $type = null, $fc = null, $fs = null, $fw = null, $tt = null ){

    return "<{$type} style=\" font-color:{$fc}; font-size:{$fs}; font-weight:{$fw}; text-transform:{$tt}; \">{$title}</{$type}>";

}

?>
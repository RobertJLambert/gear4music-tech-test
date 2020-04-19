<?php

spl_autoload_register("AutoLoader");

function autoLoader ($classFolder, $className) 
{
    $file = "classes/" . $classFolder . "/" . $className . ".php";
    // echo $file . "<br>";

    if ( file_exists( $file )) {
        require_once( $file );
    } else {
        return false;
    }
}
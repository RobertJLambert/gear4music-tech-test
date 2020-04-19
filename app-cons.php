<?php 
// #day dispatch period start
// # new batch
// # parcels = consignment . id number <= couriers
// #night dispatch period end
// # id numbers =>$method courier

spl_autoload_register("AutoLoader");
function autoLoader ($classFolder, $className) 
{
     $file = "classes/" . $classFolder . "/" . $className . ".php";

    if ( file_exists( $file )){
        require_once( $file );
    }
}
// require_once("inc/AutoLoader.php")

AutoLoader("Batch", "Batch");

$batch = new Batch\Batch();
echo $batch->startDispatch() . "<br>";

$consignments = new Batch\Consignments();
echo $consignments->Parcels() . "<br>";

<?php 
#day dispatch period starts
##Consignments id num
###Courier assigned
#night dispatch period ends

#day dispatch period start new batch
# parcels = consignment . id number <= couriers
#night dispatch period end
# id numbers =>$method courier

require_once("inc/AutoLoader.php");

AutoLoader("Batch", "Batch");
AutoLoader("Batch/Consignments", "Consignmentss");
AutoLoader("Batch/Consignments", "Couriers");
AutoLoader("Batch/Consignments/Parcels", "Parcels");

$batch = new Batch\Batch();
echo $batch->startDispatch() . "<br>";

$consignments = new Batch\Consignments\Consignments();
echo $consignments->createConsignment() . "<br>";

$parcels = new Batch\Consignments\Parcels\Parcels();
echo $parcels->addParcels() . "<br>"; 

$couriers = new Batch\Consignments\Couriers();
echo $couriers->courierPickup() . "<br>";


echo $batch->endDispatch() . "<br>";
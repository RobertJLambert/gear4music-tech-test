<?php
namespace Batch\Consignments;

use Batch\Batch;

interface Parcels_Implementer
{
    public function courierPickup();
    public function assignConsignmentID();
    public function confirmDelivery();
}

/**
 * ClassCouriers  pick up the Batch
 */
class Couriers extends Batch implements Parcels_Implementer
{
    private $courierID;
    private static $consignmentID;
    
    public function __construct() {
    }
    
    /**
     * courierPickup
     * 
     * @return void
     */
    public function courierPickup() {
        echo "hi  courierPickup - ";
        $this->assignConsignmentID();
    }
    
	public function assignConsignmentID()
	{
        parent::setBatchID(12399999999907);
        echo parent::getBatchID();
        // echo "assignConsignmentID " . self::$consignmentID;
    }

    public function confirmDelivery()
    {
        # code...
    }
}

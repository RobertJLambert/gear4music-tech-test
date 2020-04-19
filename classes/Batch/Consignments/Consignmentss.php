<?php
namespace Batch\Consignments;

use Batch\Batch;

interface Consignment_Implementer
{
    public function createConsignment();
    public function addParcels();
}

/**
 * Consignments
 * These are the collection of parcels that a Courier would assign their ID to and then take and deliver
 */
class Consignments extends Batch implements Consignment_Implementer
{
    public function __construct() {
        return "hi Consignment";
    }
    
    /**
     * createConsignment
     *
     * @return void
     */
    public function createConsignment() {
        return "hi  createConsignment";
        echo $this->monkeyNews();
    }
    
    /**
     * addParcels
     *
     * @return void
     */
    public function addParcels() {
        return "hi addParcels";
    }
    
	public static function monkeyNews()
	{
		return "hi monkeyNews";
    }
}


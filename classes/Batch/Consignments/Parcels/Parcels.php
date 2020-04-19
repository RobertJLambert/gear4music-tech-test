<?php
namespace Batch\Consignments\Parcels;

use Batch\Batch;

interface Parcels_Imp
{
    public function addParcels();
    public function loveThosedParcels();
}

class Parcels extends Batch implements Parcels_Imp
{
    private $courierID;
    
    public function __construct() {
    }

    public function addParcels() {
        return "hi addParcels";
    }

    public function loveThosedParcels() {
    }

}


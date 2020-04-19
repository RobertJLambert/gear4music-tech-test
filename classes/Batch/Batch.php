<?php
namespace Batch;

interface Batchi
{
    public function startDispatch();
    public function endDispatch();
}

/**
 * Class Batch
 * The main container for logistics
 */
class Batch implements Batchi
{    
    /**
     * now
     *
     * @var mixed
     */
    protected $now, $niceNow, $batchID;
    
    /**
     * __construct
     *
     * @return string Returns date - should be 
     */
    public function __construct() 
    {
    }
        
    /**
     * startDispatch
     *
     * @return int|string Should return date time and id
     */
    public function startDispatch()
    {
        $now = new \DateTime();
        $niceNow =  $now->format('Y-m-d H:i:s');
        return "hi startDispatch  $niceNow";
    }
    
    /**
     * endDispatch
     *
     * @param  mixed $id The batch ID
     * @return void
     */
    public function endDispatch(int $id = null)
    {
        return "hi vendDispatch ";
        
    }
    
    public function add($id = null)
    {
    }

    /**
     * Get the value of batchID
     */ 
    public function getBatchID()
    {
        return $this->batchID;
    }

    /**
     * Set the value of batchID
     *
     * @return  self
     */ 
    public function setBatchID($batchID)
    {
        $this->batchID = $batchID;

        return $this;
    }
}


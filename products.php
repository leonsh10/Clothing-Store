<?php


class products
{
   
    public $emriProduktit;
    public $pershkrimiProduktit;
    public $qmimiProduktit;
    public $fotoProduktit;

    public function __construct($emriProduktit,  $pershkrimiProduktit, $qmimiProduktit, $fotoProduktit)
    {
        $this->emriProduktit=$emriProduktit;
        $this->pershkrimiProduktit=$pershkrimiProduktit;
        $this->qmimiProduktit=$qmimiProduktit;
        $this->fotoProduktit=$fotoProduktit;
    }

  
    public function getEmri()
    {
        return $this->emriProduktit;
    }
    public function getPershkrimi()
    {
        return $this->pershkrimiProduktit;
    }
    public function getQmimi()
    {
        return $this->qmimiProduktit;
    }
    public function getFoto()
    {
        return $this->fotoProduktit;
    }
}

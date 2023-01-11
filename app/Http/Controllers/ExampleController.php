<?php

class claseA
{
    public function getInformationItems()
    {
        return ["items"];
    }
}

class claseC
{
    public function getInformationOfClaseC()
    {
        return ["c"];
    }
}

class claseB
{
    private $claseA;
    private $claseC;

    public function __construct(claseA $claseA, claseC $claseC)
    {
        $this->claseA = $claseA;
        $this->claseC = $claseC;
    }

    public function getInformationOfClaseA()
    {
        $this->claseA->getInformationItems();
    }

    public function getInformationOfClaseC()
    {
        $this->claseC->getInformationOfClaseC();
    }
}
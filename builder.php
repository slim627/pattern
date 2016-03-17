<?php

class Phone
{
    private $_name;
    private $_os;

    public function setName($name)
    {
    $this->_name = $name;
    }

    public function setOs($os)
    {
     $this->_os = $os;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getOs()
    {
        return $this->_os;
    }
}

abstract class BuilderPhone
{
    protected $_phone;

    public function getPhone()
    {
    return $this->_phone;
    }

    public function createPhone()
    {
    $this->_phone = new Phone();
    }

    abstract public function buildName();

    abstract public function buildOs();
}

class BuilderNexus4 extends BuilderPhone
{
    public function buildName()
    {
     $this->_phone->setName('Nexus4');
    }

    public function buildOs()
    {
     $this->_phone->setOs("Android");
    }
}

class BuilderIphone5 extends BuilderPhone
{
    public function buildName()
    {
     $this->_phone->setName('Iphone5');
    }

    public function buildOs()
    {
     $this->_phone->setOs("iOs");
    }
}

class Chooser
{
    private $_builderPhone;

    public function setBuilderPhone(BuilderPhone $mp)
    {
     $this->_builderPhone = $mp;
    }

    public function getPhone()
    {
     return $this->_builderPhone->getPhone();
    }

    public function constructPhone()
    {
     $this->_builderPhone->createPhone();
     $this->_builderPhone->buildName();
     $this->_builderPhone->buildOs();
    }
}

$user = new Chooser();
$google = new BuilderNexus4();
$apple = new BuilderIphone5();
$user->setBuilderPhone($google);
$user->constructPhone();
$realPhone = $user->getPhone();

echo $realPhone->getName() .' -> ' . $realPhone->getOs();
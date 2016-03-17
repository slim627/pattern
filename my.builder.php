<?php

class Phone
{
    private $name;

    private $number;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }
}

abstract class PhoneBuilder
{
    protected $phone;

    public function getPhone()
    {
        return $this->phone;
    }

    public function createPhone()
    {
        $this->phone = new Phone();
    }

    abstract function setNumber();

    abstract function setName();
}

class IphoneBuilder extends PhoneBuilder
{
    public function setNumber()
    {
        $this->phone->setNumber('3223232');
    }

    public function setName()
    {
        $this->phone->setName('Iphone');
    }
}

class SamsungBuilder extends PhoneBuilder
{
    public function setNumber()
    {
        $this->phone->setNumber('4454545');
    }

    public function setName()
    {
        $this->phone->setName('Sambsung');
    }
}

class User
{
    private $builder;

    public function setBuilder(PhoneBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function constructPhone()
    {
        $this->builder->createPhone();
        $this->builder->setName();
        $this->builder->setNumber();
    }

    public function getPhone()
    {
        return $this->builder->getPhone();
    }
}

$iphone = new IphoneBuilder();
$samsung = new SamsungBuilder();
$user = new User();
$user->setBuilder($samsung);
$user->constructPhone();

$phone = $user->getPhone();

echo $phone->getName() .' : '. $phone->getNumber();
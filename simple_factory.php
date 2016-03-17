<?php

class SimpleFactory
{
    public function createClothes($closesName)
    {
        $closes = null;

        if ($closesName == 'tshirt') {
            $closes = new TShirt();
        }
        elseif ($closesName == 'skirt') {
            $closes = new Skirt();
        }

        return $closes;
    }
}

class ToysFactory {

    public $simpleFactory;

    public function __construct(SimpleFactory $simpleFactory) {
        $this->simpleFactory = $simpleFactory;
    }

    public function produceToy($closesName) {
        $closes = null;

        $closes = $this->simpleFactory->createClothes($closesName);

        $closes->prepare();
        $closes->package();
        $closes->label();

        return $closes;
    }
}

class Skirt {}
class TShirt {}
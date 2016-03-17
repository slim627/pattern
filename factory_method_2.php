<?php

abstract class XML_Node_Abstract
{
    abstract function createNode($tag);
}

class Xml_Node extends XML_Node_Abstract
{
    /*...*/
    public function createNode($tag)
    {
        return new Xml_Node();
    }
    /*...*/

    public function parse()
    {
        /*...*/
        $ChildNode = $this -> createNode($tag);
        /*..*/
    }
}

class Xml_Node_Processor extends Xml_Node
{
    public function createNode($tag)
    {
        switch($tag)
        {
            case "food":
                return new My_Food();
            case "cow":
                return new My_Big_Orange_Cow();
        }

        return parent::createNode($tag);
    }

}

class My_Food extends Xml_Node {};
class My_Big_Orange_Cow extends Xml_Node {};
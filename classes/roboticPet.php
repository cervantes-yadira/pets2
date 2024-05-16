<?php
class RoboticPet extends Pet
{
    private $_accessories;
    private $_material;

    function __construct($animal, $color, $accessories, $material)
    {
        parent::__construct($animal, $color);
        $this->_accessories = $accessories;
        $this->_material = $material;
    }

    function repair()
    {
        echo "Pet is being repaired";
    }
}
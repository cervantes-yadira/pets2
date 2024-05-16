<?php
class StuffedPet extends Pet
{
    private $_size;
    private $_stuffingType;
    private $_material;

    function __construct($name = "unknown", $color = "unknown", $size, $stuffingType, $material)
    {
        parent::__construct($name, $color);
        $this->_material = $material;
        $this->_stuffingType = $stuffingType;
        $this->_size = $size;
    }

    function snuggle() {
        echo "Pet is soft";
    }

    function restuff() {
        echo "Pet is fluffy again";
    }
}

<?php
class StuffedPet extends Pet
{
    private $_size;
    private $_stuffingType;
    private $_material;

    function __construct($name = "", $color = "", $size="", $stuffingType="", $material="")
    {
        parent::__construct($name, $color);
        $this->_material = $material;
        $this->_stuffingType = $stuffingType;
        $this->_size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->_size = $size;
    }

    /**
     * @return mixed
     */
    public function getStuffingType()
    {
        return $this->_stuffingType;
    }

    /**
     * @param mixed $stuffingType
     */
    public function setStuffingType($stuffingType)
    {
        $this->_stuffingType = $stuffingType;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->_material;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->_material = $material;
    }

    function snuggle() {
        echo "Pet is soft";
    }

    function restuff() {
        echo "Pet is fluffy again";
    }
}

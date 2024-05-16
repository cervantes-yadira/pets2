<?php
class RoboticPet extends Pet
{
    private $_accessories;
    private $_material;

    function __construct($animal="", $color="", $accessories="", $material="")
    {
        parent::__construct($animal, $color);
        $this->_accessories = $accessories;
        $this->_material = $material;
    }

    /**
     * @return mixed
     */
    public function getAccessories()
    {
        return $this->_accessories;
    }

    /**
     * @param mixed $accessories
     */
    public function setAccessories($accessories)
    {
        $this->_accessories = $accessories;
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

    function repair()
    {
        echo "Pet is being repaired";
    }
}
<?php
class RoboticPet extends Pet
{
    private $_accessories;

    function __construct($animal="", $color="", $accessories="")
    {
        parent::__construct($animal, $color);
        $this->_accessories = $accessories;
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


    function repair()
    {
        echo "Pet is being repaired";
    }
}
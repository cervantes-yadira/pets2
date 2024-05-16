<?php
class Pet
{
    private $_animal;
    private $_color;

    function __construct($animal="", $color="")
    {
        $this->_animal = $animal;
        $this->_color = $color;
    }

    /**
     * @return mixed
     */
    public function getAnimal()
    {
        return $this->_animal;
    }

    /**
     * @param mixed $animal
     */
    public function setAnimal($animal)
    {
        $this->_animal = $animal;
    }

    /**
     * @return mixed|string
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * @param mixed|string $color
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }
}
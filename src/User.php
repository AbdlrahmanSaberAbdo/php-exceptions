<?php

namespace PhpExceptions;

use phpDocumentor\Reflection\Types\Boolean;

class User {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool|Boolean
     */
    protected $isALowed;

    /**
     * User constructor.
     * @param $name
     * @param  $isALowed
     */
    public function __construct($name, $isALowed)
    {
        $this->name = $name;
        $this->isALowed = $isALowed;
    }

    /**
     * @return bool|Boolean
     */
    public function getIsAlowed()
    {
        return $this->isALowed;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}


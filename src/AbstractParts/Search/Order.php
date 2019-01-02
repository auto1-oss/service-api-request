<?php

namespace Auto1\ServiceAPIRequest\AbstractParts\Search;

/**
 * Used to build search requests.
 *
 * Class Order
 */
class Order
{
    const ASC = 'ASC';
    const DESC = 'DESC';

    /**
     * @var string
     */
    private $direction = self::ASC;

    /**
     * @var string
     */
    private $property;

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection(string $direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @param string $property
     *
     * @return $this
     */
    public function setProperty(string $property)
    {
        $this->property = $property;

        return $this;
    }
}

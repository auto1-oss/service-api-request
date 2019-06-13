<?php

/*
 * This file is part of the auto1-oss/service-api-request package.
 *
 * (c) AUTO1 Group GmbH https://www.auto1-group.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Auto1\ServiceAPIRequest\AbstractParts\Search;

/**
 * Used to build search requests.
 *
 * Class Filter
 */
class Filter
{
    const TYPE_EQUAL = 'eq';
    const TYPE_GREATER_THAN = 'gt';
    const TYPE_LESS_THAN = 'lt';
    const TYPE_BETWEEN = 'between';
    const TYPE_IN = 'in';
    const TYPE_EMPTY = 'empty';
    const TYPE_IS_NULL = 'isnull';

    /**
     * @var string
     */
    private $property;

    /**
     * @var string
     */
    private $type;

    /**
     * @var mixed
     */
    private $value;

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

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}

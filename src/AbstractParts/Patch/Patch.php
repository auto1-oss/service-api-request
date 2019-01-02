<?php

namespace Auto1\ServiceAPIRequest\AbstractParts\Patch;

/**
 * Class Patch.
 */
class Patch
{
    const OPERATION_REPLACE = 'replace';
    const OPERATION_ADD = 'add';
    const OPERATION_REMOVE = 'remove';

    /**
     * const OPERATION_*.
     *
     * @var string
     */
    private $op;

    /**
     * @var string
     */
    private $path;

    /**
     * @var mixed
     */
    private $value;

    /**
     * Patch constructor.
     *
     * @param string $op
     * @param string $path
     * @param mixed  $value
     */
    public function __construct(string $op, string $path, $value = null)
    {
        $this->op = $op;
        $this->path = $path;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getOp(): string
    {
        return $this->op;
    }

    /**
     * @param string $op
     *
     * @return self
     */
    public function setOp(string $op): self
    {
        $this->op = $op;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

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
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }
}

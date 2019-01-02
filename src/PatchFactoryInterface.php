<?php

namespace Auto1\ServiceAPIRequest;

use Auto1\ServiceAPIRequest\AbstractParts\Patch\Patch;

/**
 * Class PatchFactory.
 */
interface PatchFactoryInterface
{
    /**
     * @param string $path
     * @param mixed  $value
     *
     * @return Patch
     */
    public function createValueAddingPatch(string $path, $value): Patch;

    /**
     * @param string $path
     *
     * @return Patch
     */
    public function createValueRemovingPatch(string $path): Patch;

    /**
     * @param string $path
     * @param mixed  $value
     *
     * @return Patch
     */
    public function createValueReplacingPatch(string $path, $value): Patch;
}
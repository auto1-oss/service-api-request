<?php

namespace Auto1\ServiceAPIRequest;

use Auto1\ServiceAPIRequest\AbstractParts\Patch\Patch;

class PatchFactory implements PatchFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createValueAddingPatch(string $path, $value): Patch
    {
        return new Patch(Patch::OPERATION_ADD, $path, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function createValueRemovingPatch(string $path): Patch
    {
        return new Patch(Patch::OPERATION_REMOVE, $path);
    }

    /**
     * {@inheritdoc}
     */
    public function createValueReplacingPatch(string $path, $value): Patch
    {
        return new Patch(Patch::OPERATION_REPLACE, $path, $value);
    }
}

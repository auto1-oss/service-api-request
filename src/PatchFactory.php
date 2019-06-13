<?php

/*
 * This file is part of the auto1-oss/service-api-request package.
 *
 * (c) AUTO1 Group GmbH https://www.auto1-group.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

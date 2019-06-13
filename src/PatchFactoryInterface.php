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
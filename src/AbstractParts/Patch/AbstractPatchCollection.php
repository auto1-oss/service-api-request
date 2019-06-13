<?php

/*
 * This file is part of the auto1-oss/service-api-request package.
 *
 * (c) AUTO1 Group GmbH https://www.auto1-group.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Auto1\ServiceAPIRequest\AbstractParts\Patch;

use Auto1\ServiceAPIRequest\ServiceRequestInterface;

/**
 * Class AbstractPatchCollection.
 */
abstract class AbstractPatchCollection extends \ArrayObject implements ServiceRequestInterface
{
    /**
     * @param Patch $patch
     *
     * @return self
     */
    public function addPatch(Patch $patch): self
    {
        $this->append($patch);

        return $this;
    }
}

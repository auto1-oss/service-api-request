<?php

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

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

use Auto1\ServiceAPIRequest\ServiceRequestInterface;

/**
 * Used to build search requests.
 *
 * Class Search
 */
abstract class AbstractSearchRequest implements ServiceRequestInterface
{
    /**
     * @var PageFilter
     */
    private $filter = null;

    /**
     * @var int|null
     */
    private $page = 0;

    /**
     * @var int|null
     */
    private $pageSize = 9999;

    /**
     * @var Order[]|null
     */
    private $sort = null; //TODO: empty sort

    /**
     * @return PageFilter|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param PageFilter $filter
     *
     * @return $this
     */
    public function setFilter(PageFilter $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int|null $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int|null $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * @return Order[]
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param Order[] $sort
     *
     * @return $this
     */
    public function setSort(array $sort)
    {
        $this->sort = $sort;

        return $this;
    }
}

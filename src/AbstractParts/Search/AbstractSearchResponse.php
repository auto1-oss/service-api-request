<?php

namespace Auto1\ServiceAPIRequest\AbstractParts\Search;

/**
 * Used to transform search response.
 *
 * Class Response
 */
abstract class AbstractSearchResponse
{
    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $pageSize;

    /**
     * @var int
     */
    protected $totalPageCount;

    /**
     * @var object[]
     */
    protected $entities;

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     *
     * @return $this
     */
    public function setPage(int $page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     *
     * @return $this
     */
    public function setPageSize(int $pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPageCount(): int
    {
        return $this->totalPageCount;
    }

    /**
     * @param int $totalPageCount
     *
     * @return $this
     */
    public function setTotalPageCount(int $totalPageCount)
    {
        $this->totalPageCount = $totalPageCount;

        return $this;
    }

    /**
     * @return object[]
     */
    public function getEntities(): array
    {
        return $this->entities;
    }

    /**
     * @param object[] $entities
     *
     * @return $this
     */
    public function setEntities(array $entities)
    {
        $this->entities = $entities;

        return $this;
    }
}

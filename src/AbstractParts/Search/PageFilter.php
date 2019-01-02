<?php

namespace Auto1\ServiceAPIRequest\AbstractParts\Search;

/**
 * Class PageFilter.
 */
class PageFilter
{
    /**
     * @var Filter[]
     */
    private $filters;

    /**
     * @return Filter[]
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param Filter[] $filters
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @param Filter $filter
     *
     * @return $this
     */
    public function addFilter($filter)
    {
        $this->filters[] = $filter;

        return $this;
    }
}

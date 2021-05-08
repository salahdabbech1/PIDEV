<?php

namespace Flasher\Prime\Filter;

use Flasher\Prime\Filter\Specification\DelaySpecification;
use Flasher\Prime\Filter\Specification\HopsSpecification;
use Flasher\Prime\Filter\Specification\PrioritySpecification;

final class CriteriaBuilder
{
    /**
     * @var FilterBuilder
     */
    private $filterBuilder;

    /**
     * @var array
     */
    private $criteria;

    /**
     * @param FilterBuilder $filterBuilder
     * @param array         $criteria
     */
    public function __construct(FilterBuilder $filterBuilder, array $criteria)
    {
        $this->filterBuilder = $filterBuilder;
        $this->criteria = $criteria;
    }

    public function build()
    {
        $this->buildPriority();
        $this->buildHops();
        $this->buildDelay();
        $this->buildLife();
        $this->buildLimit();
        $this->buildOrder();

        return $this->filterBuilder;
    }

    public function buildPriority()
    {
        if (!isset($this->criteria['priority'])) {
            return;
        }

        $priority = $this->criteria['priority'];

        if (!is_array($priority)) {
            $priority = array('min' => $priority);
        }

        $min = isset($priority['min']) ? $priority['min'] : null;
        $max = isset($priority['max']) ? $priority['max'] : null;

        $this->filterBuilder->andWhere(new PrioritySpecification($min, $max));
    }

    public function buildHops()
    {
        if (!isset($this->criteria['hops'])) {
            return;
        }

        $hops = $this->criteria['hops'];

        if (!is_array($hops)) {
            $hops = array('min' => $hops);
        }

        $min = isset($hops['min']) ? $hops['min'] : null;
        $max = isset($hops['max']) ? $hops['max'] : null;

        $this->filterBuilder->andWhere(new HopsSpecification($min, $max));
    }

    public function buildDelay()
    {
        if (!isset($this->criteria['delay'])) {
            return;
        }

        $delay = $this->criteria['delay'];

        if (!is_array($delay)) {
            $delay = array('min' => $delay);
        }

        $min = isset($delay['min']) ? $delay['min'] : null;
        $max = isset($delay['max']) ? $delay['max'] : null;

        $this->filterBuilder->andWhere(new DelaySpecification($min, $max));
    }

    public function buildLife()
    {
        if (!isset($this->criteria['life'])) {
            return;
        }

        $life = $this->criteria['life'];

        if (!is_array($life)) {
            $life = array('min' => $life);
        }

        $min = isset($life['min']) ? $life['min'] : null;
        $max = isset($life['max']) ? $life['max'] : null;

        $this->filterBuilder->andWhere(new HopsSpecification($min, $max));
    }

    public function buildLimit()
    {
        if (!isset($this->criteria['limit'])) {
            return;
        }

        $this->filterBuilder->setMaxResults($this->criteria['limit']);
    }

    public function buildOrder()
    {
        if (!isset($this->criteria['order_by'])) {
            return;
        }

        $orderings = $this->criteria['order_by'];

        if (!is_array($orderings)) {
            $orderings = array($orderings => FilterBuilder::ASC);
        }

        $this->filterBuilder->orderBy($orderings);
    }
}

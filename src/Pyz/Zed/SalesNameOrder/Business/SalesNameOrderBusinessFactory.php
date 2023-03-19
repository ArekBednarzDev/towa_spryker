<?php

namespace Pyz\Zed\SalesNameOrder\Business;

use Pyz\Zed\SalesNameOrder\Business\OrderExpander\OrderExpander;
use Pyz\Zed\SalesNameOrder\Business\OrderExpander\OrderExpanderInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class SalesNameOrderBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\SalesNameOrder\Business\OrderExpander\OrderExpanderInterface
     */
    public function createOrderExpander(): OrderExpanderInterface
    {
        return new OrderExpander();
    }
}

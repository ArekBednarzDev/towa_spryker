<?php

namespace Pyz\Zed\SalesNameOrder\Business;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\SalesNameOrder\Business\SalesNameOrderBusinessFactory getFactory()
 */
class SalesNameOrderFacade extends AbstractFacade implements SalesNameOrderFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $salesOrderEntityTransfer
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function expandSalesOrderEntityTransferWithOrderName(SpySalesOrderEntityTransfer $salesOrderEntityTransfer, QuoteTransfer $quoteTransfer): SpySalesOrderEntityTransfer
    {
        return $this->getFactory()->createOrderExpander()->expandSalesOrderEntityTransferWithOrderName(
            $salesOrderEntityTransfer,
            $quoteTransfer,
        );
    }
}

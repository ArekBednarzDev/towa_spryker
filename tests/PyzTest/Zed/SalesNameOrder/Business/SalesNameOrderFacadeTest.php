<?php

namespace PyzTest\Zed\SalesNameOrder\Business;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use PyzTest\Zed\SalesNameOrder\SalesNameOrderBusinessTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group SalesNameOrder
 * @group Business
 * @group Facade
 * @group SalesNameOrderFacadeTest
 * Add your own group annotations below this line
 */
class SalesNameOrderFacadeTest extends Unit
{
    /**
     * @var \PyzTest\Zed\SalesNameOrder\SalesNameOrderBusinessTester
     */
    protected SalesNameOrderBusinessTester $tester;

    /**
     * @return void
     */
    public function testExpandSalesOrderEntityTransferWithOrderName(): void
    {
        $quoteTransfer = $this->tester->createQuoteTransferWithOrderName();
        $salesOrderEntityTransfer = $this->tester->getFacade()->expandSalesOrderEntityTransferWithOrderName(
            (new SpySalesOrderEntityTransfer()),
            $quoteTransfer,
        );

        $this->assertSame($quoteTransfer->getNameOrder(), $salesOrderEntityTransfer->getOrderName());
    }
}

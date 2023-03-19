<?php

declare(strict_types=1);

namespace PyzTest\Zed\SalesNameOrder;

use Generated\Shared\DataBuilder\QuoteBuilder;
use Generated\Shared\Transfer\QuoteTransfer;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 * @method \Pyz\Zed\SalesNameOrder\Business\SalesNameOrderFacadeInterface getFacade()
 *
 * @SuppressWarnings(PHPMD)
*/
class SalesNameOrderBusinessTester extends \Codeception\Actor
{
    use _generated\SalesNameOrderBusinessTesterActions;

    /**
     * @param string $orderName
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function createQuoteTransferWithOrderName(string $orderName = 'Test name'): QuoteTransfer
    {
        return (new QuoteBuilder(['nameOrder' => $orderName]))->build();
    }
}

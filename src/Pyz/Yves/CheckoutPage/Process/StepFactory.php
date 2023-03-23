<?php

namespace Pyz\Yves\CheckoutPage\Process;

use Pyz\Yves\CheckoutPage\Plugin\Router\CheckoutPageRouteProviderPlugin;
use Pyz\Yves\CheckoutPage\Process\Steps\NameOrderStep;
use SprykerShop\Yves\CheckoutPage\Process\StepFactory as SprykerStepFactory;

/**
 * @method \SprykerShop\Yves\CheckoutPage\CheckoutPageConfig getConfig()
 */
class StepFactory extends SprykerStepFactory
{
    /**
     * @return array|\Spryker\Yves\StepEngine\Dependency\Step\StepInterface[]
     */
    public function getSteps(): array
    {
        return [
            $this->createEntryStep(),
            $this->createNameOrderStep(),
            $this->createCustomerStep(),
            $this->createAddressStep(),
            $this->createShipmentStep(),
            $this->createPaymentStep(),
            $this->createSummaryStep(),
            $this->createPlaceOrderStep(),
            $this->createSuccessStep(),
            $this->createErrorStep(),
        ];
    }

    /**
     * @return \Pyz\Yves\CheckoutPage\Process\Steps\NameOrderStep
     */
    public function createNameOrderStep(): NameOrderStep
    {
        return new NameOrderStep(
            CheckoutPageRouteProviderPlugin::ROUTE_NAME_CHECKOUT_NAME_ORDER,
            $this->getConfig()->getEscapeRoute(),
        );
    }

}

<?php

namespace Pyz\Yves\CheckoutPage\Form\Steps;

use Spryker\Yves\Kernel\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * @method \SprykerShop\Yves\CheckoutPage\CheckoutPageFactory getFactory()
 * @method \Pyz\Yves\CheckoutPage\CheckoutPageConfig getConfig()
 */
class NameOrderForm extends AbstractType
{
    /**
     * @var string
     */
    public const FORM_FIELD_NAME_ORDER = 'nameOrder';

    /**
     * @var string
     */
    public const GLOSSARY_NAME_ORDER_LABEL = 'page.checkout.name_order.name_order_label';

    /**
     * @var string
     */
    public const BLOCK_PREFIX_NAME_ORDER = 'nameOrderForm';

    /**
     * @return string
     */
    public function getBlockPrefix(): string
    {
        return static::BLOCK_PREFIX_NAME_ORDER;
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->addFieldNameOrder($builder, $options);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    protected function addFieldNameOrder(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(static::FORM_FIELD_NAME_ORDER, TextType::class, [
            'constraints' => [
                new NotBlank(),
                new Length(max: 30),
                new Regex('/^[a-z0-9]*$/', 'Order name should only contain lower case character a-z and numbers 0-9')
            ],
            'required' => true,
            'label' => self::GLOSSARY_NAME_ORDER_LABEL,
        ]);
    }
}

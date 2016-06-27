<?php

namespace AppBundle\Form;


use AppBundle\Entity\Slot;
use AppBundle\Repository\SlotRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LedAddToCartFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('slot', EntityType::class, [
                'placeholder' => 'choose a free slot',
                'class' => Slot::class,
            ])
            ->add('cost', IntegerType::class)
            ->add('addToCart', SubmitType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\CartItem'
        ]);
    }
}

<?php

namespace AppBundle\Form;


use AppBundle\Entity\Slot;
use AppBundle\Form\DataTransformer\SlotToNumberTransformer;
use AppBundle\Repository\SlotRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LedAddToCartFormType extends AbstractType
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('slot', EntityType::class, [
                'placeholder' => 'choose a free slot',
                'class' => Slot::class,
                'query_builder' => function(SlotRepository $repo) use ($options) {
                    return $repo->queryAllSlotsAvailable($options['data']['startTime'], $options['data']['endTime']);
                }
            ])
            ->add('cost', IntegerType::class)
            ->add('addToCart', SubmitType::class);

        $builder->get('slot')
            ->addModelTransformer(new SlotToNumberTransformer($this->manager));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        /*$resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\CartItem'
        ]);*/
    }
}

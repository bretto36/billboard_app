<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 24/06/2016
 * Time: 15:35
 */

namespace AppBundle\Form\DataTransformer;

use AppBundle\Entity\Slot;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class SlotToNumberTransformer implements DataTransformerInterface
{
    private $manager;

    public function __construct(ObjectManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Transforms an object (slot) to a string (number).
     *
     * @param  Slot|null $slot
     * @return string
     */
    public function transform($slot)
    {
        if (null === $slot) {
            return '';
        }

        return $slot->getId();
    }

    /**
     * Transforms a string (number) to an object (slot).
     *
     * @param  string $slotNumber
     * @return Slot|null
     * @throws TransformationFailedException if object (slot) is not found.
     */
    public function reverseTransform($slotNumber)
    {
        // no slot number? It's optional, so that's ok
        if (!$slotNumber) {
            return'';
        }

        $slot = $this->manager
            ->getRepository('AppBundle:Slot')
            // query for the slot with this id
            ->find($slotNumber)
        ;

        if (null === $slot) {
            // causes a validation error
            // this message is not shown to the user
            // see the invalid_message option
            throw new TransformationFailedException(sprintf(
                'An issue with number "%s" does not exist!',
                $slotNumber
            ));
        }

        return $slot;
    }
}
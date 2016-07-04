<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 22/06/2016
 * Time: 17:18
 */

namespace AppBundle\Repository;

use AppBundle\Entity\Slot;
use Doctrine\ORM\EntityRepository;
class SlotRepository extends EntityRepository
{
    /**
     * @return Slot[]
     */
    public function queryAllSlotsAvailable($unavailableId, $ledId)
    {
        return $this->createQueryBuilder('slot')
            ->andWhere('slot.led = :ledId AND slot.id != :unavailableId')
            ->setParameter('unavailableId', $unavailableId)
            ->setParameter('ledId', $ledId);
    }
    /**
     * @return Slot[]
     */
    public function findAllSlotsAvailable($unavailableId, $ledId)
    {
        return $this->queryAllSlotsAvailable($unavailableId, $ledId)
            ->getQuery()
            ->execute();
    }
}
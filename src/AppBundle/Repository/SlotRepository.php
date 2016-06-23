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
    public function findAllSlotsUnAvailable($startTime, $endTime)
    {
        return $this->createQueryBuilder('slot')
            ->andWhere('slot.start_time >= :startTime')
            ->orWhere('slot.start_time <= :endTime')
            ->andWhere('slot.end_time <= :endTime')
            ->orWhere('slot.end_time >= :startTime')
            ->setParameter('startTime', $startTime)
            ->setParameter('endTime', $endTime)
            ->getQuery()
            ->execute();
    }
}
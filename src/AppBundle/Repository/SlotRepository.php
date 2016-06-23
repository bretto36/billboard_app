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
    public function findAllSlotsUnAvailable($startDate, $endDate)
    {
        return $this->createQueryBuilder('slot')
            ->andWhere('slot.start_time >= :startDate')
            ->orWhere('slot.start_time <= :endDate')
            ->andWhere('slot.end_time <= :endDate')
            ->orWhere('slot.end_time >= :startDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->getQuery()
            ->execute();
    }
}
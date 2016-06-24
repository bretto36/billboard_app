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
     * @param $startTime
     * @param $endTime
     *
     * @return Slot[]
     */
    public function queryAllSlotsAvailable($startTime, $endTime)
    {
        return $this->createQueryBuilder('slot')
            ->andWhere('slot.start_time < :startTime AND slot.end_time < :startTime')
            ->orWhere('slot.start_time > :endTime AND slot.end_time > :endTime')
            ->setParameter('startTime', $startTime)
            ->setParameter('endTime', $endTime);
    }
    /**
     * @param $startTime
     * @param $endTime
     *
     * @return Slot[]
     */
    public function findAllSlotsAvailable($startTime, $endTime)
    {
        return $this->queryAllSlotsAvailable($startTime, $endTime)
            ->getQuery()
            ->execute();
    }
}
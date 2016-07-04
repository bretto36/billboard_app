<?php
/**
 * Created by PhpStorm.
 * User: Kosta
 * Date: 03/07/2016
 * Time: 12:08
 */

namespace AppBundle\Repository;

use AppBundle\Entity\SlotSchedule;
use Doctrine\ORM\EntityRepository;
class SlotScheduleRepository extends EntityRepository
{
    /**
     * @param $startTime
     * @param $endTime
     *
     * @return SlotSchedule[]
     */
    public function queryAllSlotSchedulesUnAvailable($startTime, $endTime, $ledId)
    {
        return $this->createQueryBuilder('schedule')
            ->andWhere('(schedule.start_time >= :startTime 
                AND schedule.start_time <= :endTime 
                AND slot.led = :led)
                OR (schedule.end_time >= :startTime
                AND schedule.end_time <= :startTime
                AND slot.led = :led)')
            ->leftJoin('schedule.slot', 'slot')
            ->setParameter('startTime', $startTime)
            ->setParameter('endTime', $endTime)
            ->setParameter('led', $ledId);
    }
    /**
     * @param $startTime
     * @param $endTime
     *
     * @return SlotSchedule[]
     */
    public function findAllSlotSchedulesUnAvailable($startTime, $endTime, $ledId)
    {
        return $this->queryAllSlotSchedulesUnAvailable($startTime, $endTime, $ledId)
            ->getQuery()
            ->execute();
    }
}
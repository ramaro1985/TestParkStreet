<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\EntityRepository;
use \DateTime;

/**
 * VtestRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VtestRepository extends EntityRepository
{
  public function filterProperties($fill)
  {

    $client_id = $fill['client_id'];
    $product_id = $fill['product_id'];
    $date_id = $fill['date_id'];

    $now = new \DateTime('now');
    $delay = new \Datetime('last month');
    $this_month = new \Datetime('this month');
    $last_year = new \DateTime('last year');
    $this_year = new \DateTime('this year');

    $qb = $this->createQueryBuilder('v');
    $qb->select('v');
    
    if (isset($client_id) && $client_id != 0) {
      $qb->andWhere('v.client_id = :client_id');
      $qb->setParameter('client_id', $client_id);
    }
    if (isset($product_id) && $product_id != 0) {
      $qb->andWhere('v.product_id = :product_id');
      $qb->setParameter('product_id', $product_id);
    }
    if (isset($date_id) && $date_id != 0) {
      if ($date_id == 1) {

        $qb->andWhere('c.invoice_date <= :now');
        $qb->andWhere('c.invoice_date >= :delay');
        $qb->setParameter('now', $now);
        $qb->setParameter('delay', $delay);
      } else if ($date_id == 2) {
        //This Month
        $qb->where('YEAR(d.invoice_date) = :year')
          ->andWhere('MONTH(d.invoice_date) = :month')
          ->setParameter('month', $this_month)
          ->setParameter('year', $this_year);
      } else if ($date_id == 3) {
        //This Year
        $qb->where('YEAR(d.invoice_date) = :year')
          ->setParameter('year', $this_year);
      } else if ($date_id == 4) {
        //Last Year
        $qb->where('YEAR(d.invoice_date) = :year')
          ->setParameter('year', $last_year);
      }

    }
    $query = $qb->getQuery();
    try {
      return $query->getResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
      return null;
    }
  }
}

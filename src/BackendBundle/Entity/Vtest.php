<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OrderBy;

/**
 * @ORM\Entity(readOnly=true)
 * @ORM\Table(name="Vtest")
 * @ORM\Entity(repositoryClass="BackendBundle\Entity\VtestRepository")
 */
class Vtest
{
  /**
   *
   * You would need to set the schema tool to ignore the entity Vtest when doing a schema:update...
   *In order to do that you just need to create this command in your bundle, and set yout entity Vtest in the ignoredEntity list:
   *src/Backend/Command/DoctrineUpdateCommand.php:
   *
   */

  private function __construct()
  {
  }

  /**
   * @var string
   * @ORM\Column(name="client_id", type="string")
   * @ORM\Id
   */
  private $client_id;

  /**
   * @var string     *
   * @ORM\Column(name="client_name", type="string", length=200)
   */
  private $client_name;

  /**
   * @var string     *
   * @ORM\Column(name="product_description", type="string", length=200)
   */
  private $product_description;

  /**
   * @var datetime     *
   * @ORM\Column(name="invoice_date", type="datetime", length=200)
   */
  private $invoice_date;

  /**
   * @var string     *
   * @ORM\Column(name="invoice_num", type="string", length=200)
   */
  private $invoice_num;

  /**
   * @var string     *
   * @ORM\Column(name="product_id", type="string", length=200)
   */
  private $product_id;

  /**
   * @var string     *
   * @ORM\Column(name="qty", type="string", length=200)
   */
  private $qty;

  /**
   * @var string     *
   * @ORM\Column(name="price", type="string", length=200)
   */
  private $price;

  /**
   * Get client_id
   * @return integer
   */
  public function getClientId()
  {
    return $this->client_id;
  }

  /**
   * Get client_name
   * @return string
   */
  public function getClientName()
  {
    return $this->client_name;
  }

  /**
   * Get product_description
   * @return string
   */
  public function getProductDescription()
  {
    return $this->product_description;
  }

  /**
   * Get invoice_date
   * @return string
   */
  public function getInvoiceDate()
  {
    return $this->invoice_date;
  }

  /**
   * Get invoice_num
   * @return string
   */
  public function getInvoiceNum()
  {
    return $this->invoice_num;
  }

  /**
   * Get product_id
   * @return string
   */
  public function getProductId()
  {
    return $this->product_id;
  }

  /**
   * Get qty
   * @return string
   */
  public function getQty()
  {
    return $this->qty;
  }

  /**
   * Get price
   * @return string
   */
  public function getPrice()
  {
    return $this->price;
  }

  public function filterProperties($fill)
  {

    $client_id = $fill['client_id'];

    $qb = $this->createQueryBuilder('v');
    $qb->select('v');

    if (isset($client_id) && $client_id != 0) {
      $qb->andWhere('v.client_id = :client_id');
      $qb->setParameter('client_id', $client_id);
    }
    $query = $qb->getQuery();
    try {
      return $query->getResult();
    } catch (\Doctrine\ORM\NoResultException $e) {
      return null;
    }
  }

}

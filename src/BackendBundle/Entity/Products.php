<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OrderBy;

/**
 * Products
 *
 * @ORM\Table(name="Products")
 * @ORM\Entity
 *
 */
class Products
{
  /**
   * @var string
   *
   * @ORM\Column(name="product_id", type="string")
   * @ORM\Id
   */

  private $product_id;

  /**
   * @var string     *
   * @ORM\Column(name="client_id", type="string", length=200)
   *
   */
  private $client_id;

  /**
   * @var string     *
   * @ORM\Column(name="product_description", type="string", length=200)
   */
  private $product_description;

  /**
   * Get invoice_num
   * @return string
   */
  public function getProductId()
  {
    return $this->product_id;
  }

  /**
   * Get client_id
   * @return integer
   */
  public function getClientId()
  {
    return $this->client_id;
  }

  /**
   * Get product_description
   * @return string
   */
  public function getProductDescription()
  {
    return $this->product_description;
  }
}

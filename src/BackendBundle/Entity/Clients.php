<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OrderBy;

/**
 * Clients
 *
 * @ORM\Table(name="Clients")
 * @ORM\Entity
 *
 */
class Clients
{
  /**
   * @var string
   *
   * @ORM\Column(name="client_id", type="string")
   * @ORM\Id
   */

  private $client_id;

  /**
   * @var string     *
   *
   * @ORM\Column(name="client_name", type="string", length=200)
   *
   */
  private $client_name;

  /**
   * Get client_id
   *
   * @return integer
   */
  public function getClientId()
  {
    return $this->client_id;
  }

  /**
   * Set client_id
   *
   * @param string $client_id
   * @return  client_id
   */
  public function setClientId($client_id)
  {
    $this->client_id = $client_id;

    return $this;
  }

  /**
   * Set client_name
   *
   * @param string $client_name
   * @return  client_name
   */
  public function setClientName($client_name)
  {
    $this->client_name = $client_name;

    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getClientName()
  {
    return $this->client_name;
  }


  public function __toString()
  {
    return $this->getClientName();
  }

}

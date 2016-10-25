<?php

namespace BackendBundle\Controller;

use Hateoas\Configuration\Route;
use Hateoas\Representation\Factory\PagerfantaFactory;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

class BackendController extends Controller
{
  /**
   * @Rest\Get(name="product_list", path="/api/products", defaults={"_format" = "json"})
   * @Rest\View()
   */
  public function getAllAction(Request $request)
  {

    $limit = $request->query->getInt('limit', 10);
    $page = $request->query->getInt('page', 1);

    $productsPager = $this->getDoctrine()->getManager()
      ->getRepository('BackendBundle:Vtest')
      ->findAllPaginated($limit, $page);

    $pagerFactory = new PagerfantaFactory();

    return $pagerFactory->createRepresentation(
      $productsPager,
      new Route('product_list', array(
        'limit' => $limit,
        'page' => $page,
        'sorting' => $sorting
      ))
    );
  }
}

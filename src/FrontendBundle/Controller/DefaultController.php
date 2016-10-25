<?php

namespace FrontendBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackendBundle\Controller\BackendController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
  /**
   * @Route(name="index", path="/")
   */
  public function indexAction(Request $request)
  {

    $repository = $this->getDoctrine()->getRepository('BackendBundle:Vtest');
    $repository_prod = $this->getDoctrine()->getRepository('BackendBundle:Products');
    $countperpage = 20;
    $paginator = $this->get('knp_paginator');

    if ($request->getMethod() == "POST") {
      
      //All this code can be replaced by
      //$fill = array('client_id'=>$client_id,'product_id'=>$product_id,'date_id'=>$date_id);
      //$properties = $em->getRepository('BackendBundle:Vtest')->filterProperties($fill)
      $start = $request->get("start");
      $client_id = $request->get("client_id");
      $product_id = $request->get("product_id");
      $date_id = $request->get("date_id");

      $now = new \DateTime('now');
      $delay = new \Datetime('last month');
      $this_month = new \Datetime('this month');
      $last_year = new \DateTime('last year');
      $this_year = new \DateTime('this year');

      if ($client_id && $client_id != 0 && $date_id == 0) {
        if ($product_id && $product_id != null) {
          $data = $repository->findBy(
            array('client_id' => $client_id, 'product_id' => $product_id)
          );
        } else {
          $data = $repository->findBy(
            array('client_id' => $client_id)
          );
        }
      } else {
        $start = 1;
        if ($date_id != 0) {
          $data = $repository->createQueryBuilder('d');
          $data->select('d');

          if ($date_id == 1) {
            //Last Month To Date
            $data->Where('d.invoice_date <= :now')
              ->andWhere('d.invoice_date >= :delay')
              ->setParameter('now', $now)
              ->setParameter('delay', $delay);
          } else if ($date_id == 2) {
            //This Month
            $data->where('YEAR(d.invoice_date) = :year')
              ->andWhere('MONTH(d.invoice_date) = :month')
              ->setParameter('month', $this_month)
              ->setParameter('year', $this_year);
          } else if ($date_id == 3) {
            //This Year
            $data->where('YEAR(d.invoice_date) = :year')
              ->setParameter('year', $this_year);
          } else if ($date_id == 4) {
            //Last Year
            $data->where('YEAR(d.invoice_date) = :year')
              ->setParameter('year', $last_year);
          }

          $data->getQuery()->getResult();
        } else {
          $data = $repository->findAll();
        }
      }
      
      $data_list = $paginator->paginate(
        $data,
        $this->get('request')->query->get('page', $start),
        $countperpage
      );
      if (!$data) {
        throw $this->createNotFoundException(
          'No product found for id ' . $client_id
        );
      } else {
        $data_products = $repository_prod->findAll();
        return $this->render('frontend/data.html.twig',
          array(
            'data_list' => $data_list,
            'client_id' => $client_id,
            'data_products' => $data_products
          ));
      }
    } else {

      $data = $repository->findAll();
      $data_list = $paginator->paginate(
        $data,
        $this->get('request')->query->get('page', 1),
        $countperpage
      );

      $repository_clients = $this->getDoctrine()->getRepository('BackendBundle:Clients');
      $clients = $repository_clients->findAll();

      return $this->render('frontend/index.html.twig',
        array(
          'data_list' => $data_list,
          'clients' => $clients,
          'client_id' => 0,
        ));
    }
  }
}

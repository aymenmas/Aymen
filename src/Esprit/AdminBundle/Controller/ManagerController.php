<?php
 
namespace Esprit\AdminBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ManagerController extends Controller
{
  public function indexAction()
  {
     return $this->render('EspritAdminBundle:Manger:index.html.twig');
  }
}


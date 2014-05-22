<?php

namespace Solilokiam\AliceDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SolilokiamAliceDemoBundle:Default:index.html.twig', array('name' => $name));
    }
}

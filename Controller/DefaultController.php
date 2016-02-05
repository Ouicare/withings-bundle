<?php

namespace Ouicare\WithingsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WithingsBundle:Default:index.html.twig', array('name' => $name));
    }
}

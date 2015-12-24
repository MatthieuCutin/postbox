<?php

namespace Bloom\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BloomUserBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Bloom\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BloomFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}

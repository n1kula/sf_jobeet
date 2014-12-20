<?php

namespace Jobeet\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JobeetFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}

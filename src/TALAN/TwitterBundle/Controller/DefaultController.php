<?php

namespace TALAN\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TALANTwitterBundle:Default:index.html.twig');
    }
    public function carteAction()
    {
        return $this->render('TALANTwitterBundle:Default:layout.html.twig');
    }
}

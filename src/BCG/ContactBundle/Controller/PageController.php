<?php

namespace BCG\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BCGContactBundle:Page:index.html.twig');
    }
}

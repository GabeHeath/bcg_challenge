<?php

namespace BCG\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $agencies = $em->getRepository('BCGContactBundle:Agency')
                    ->getAgencies();

        return $this->render('BCGContactBundle:Page:index.html.twig', array(
            'agencies' => $agencies
        ));
    }
}
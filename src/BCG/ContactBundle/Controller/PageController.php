<?php

namespace BCG\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        // Persisting data so set up Entity Manager
        $em = $this->getDoctrine()
                   ->getManager();

        /* Use the getAgencies function that I created in the Agency Repository
           to get all the agencies and eager load users. */ 
        $agencies = $em->getRepository('BCGContactBundle:Agency')
                    ->getAgencies();

        // Go to index page passing the agencies instance.
        return $this->render('BCGContactBundle:Page:index.html.twig', array(
            'agencies' => $agencies
        ));
    }
}
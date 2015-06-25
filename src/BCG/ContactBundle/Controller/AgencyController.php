<?php

namespace BCG\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgencyController extends Controller
{
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $agency = $em->getRepository('BCGContactBundle:Agency')->find($id);

        if (!$agency) {
            throw $this->createNotFoundException('Agency not found.');
        }

        return $this->render('BCGContactBundle:Agency:show.html.twig', array(
            'agency' => $agency
        ));
    }
}
<?php

namespace BCG\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()
                   ->getManager();

        $agencies = $em->createQueryBuilder()
                    ->select('a')
                    ->from('BCGContactBundle:Agency',  'a')
                    ->addOrderBy('a.name', 'ASC')
                    ->getQuery()
                    ->getResult();

        return $this->render('BCGContactBundle:Page:index.html.twig', array(
            'agencies' => $agencies
        ));
    }
}
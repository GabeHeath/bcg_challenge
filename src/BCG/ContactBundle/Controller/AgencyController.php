<?php

namespace BCG\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $agency = $em->getRepository('BCGContactBundle:Agency')->find($id);

        if (!$agency) {
            throw $this->createNotFoundException('Agency not found.');
        }

        $form = $this->createFormBuilder($agency)
            ->add('name', 'text')
            ->add('phone', 'text')
            ->add('email', 'text')
            ->add('address', 'text')
            ->add('established', 'date', array('years' => range(date('Y'), date('Y') - 100)))
            ->add('save', 'submit', array('attr' => array('class' => 'btn btn-primary btn-block top-space-sm')))
            ->getForm();

        $form->handleRequest($request);
     
        if ($form->isValid()) {
            $em->flush();

            $this->addFlash(
                'notice',
                $agency->getName() . ' was updated!'
            );

            return $this->redirectToRoute('BCGContactBundle_agency_show', array('id' => $agency->getId()));
        }
        
        $form->createView();

        return $this->render('BCGContactBundle:Agency:edit.html.twig', array(
            'agency' => $agency,
            'form'   => $form->createView()
        ));
    }
}
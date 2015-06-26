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

        // Get the Agency ID from route parameter
        $agency = $em->getRepository('BCGContactBundle:Agency')->find($id);

        // If No Agency found throw exception
        if (!$agency) {
            throw $this->createNotFoundException('Agency not found.');
        }

        // Render Agency show page and pass agency instance
        return $this->render('BCGContactBundle:Agency:show.html.twig', array(
            'agency' => $agency
        ));
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // Get the Agency ID from route parameter
        $agency = $em->getRepository('BCGContactBundle:Agency')->find($id);

        // If No Agency found throw exception
        if (!$agency) {
            throw $this->createNotFoundException('Agency not found.');
        }

        // Create a form with the fields to be edited
        $form = $this->createFormBuilder($agency)
            ->add('name', 'text')
            ->add('phone', 'text')
            ->add('email', 'text')
            ->add('address', 'text')
            ->add('established', 'date', array('years' => range(date('Y'), date('Y') - 100))) // Set a custom year range
            ->add('save', 'submit', array('attr' => array('class' => 'btn btn-primary btn-block top-space-sm')))
            ->getForm();

        // When form is submitted write the data back to the task and validate it.
        $form->handleRequest($request);
     
        // If the submitted data is valid save changes to database and set flash message.
        if ($form->isValid()) {
            $em->flush();

            $this->addFlash(
                'notice',
                $agency->getName() . ' was updated!'
            );

            // Redirect to the edited agency's show page.
            return $this->redirectToRoute('BCGContactBundle_agency_show', array('id' => $agency->getId()));
        }

        // Go to Agency edit page passing agency and form instances
        return $this->render('BCGContactBundle:Agency:edit.html.twig', array(
            'agency' => $agency,
            'form'   => $form->createView()
        ));
    }
}
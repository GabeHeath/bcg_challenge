<?php

namespace BCG\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function editAction($user_id, Request $request)
    {
        // Persisting data so set up Entity Manager
        $em = $this->getDoctrine()->getManager();

        // Find the user by the id passed through route
        $user = $em->getRepository('BCGContactBundle:User')->find($user_id);

        // If no user found throw exception
        if (!$user) {
            throw $this->createNotFoundException('User not found.');
        }

        // Create the form fields to be edited on form
        $form = $this->createFormBuilder($user)
            ->add('name', 'text')
            ->add('phone', 'text')
            ->add('email', 'text')
            ->add('address', 'text')
            ->add('save', 'submit', array('attr' => array('class' => 'btn btn-primary btn-block top-space-sm')))
            ->getForm();

        // When form is submitted write the data back to the task and validate it.
        $form->handleRequest($request);
     
        // If the submitted data is valid save changes to database and set flash message.
        if ($form->isValid()) {
            $em->flush();

            $this->addFlash(
                'notice',
                $user->getName() . ' was updated!'
            );

            // Redirect to the edited user's agency page.
            return $this->redirectToRoute('BCGContactBundle_agency_show', array('id' => $user->getAgency()->getId()));
        }

        // Go to User edit page passing user and form instances
        return $this->render('BCGContactBundle:User:edit.html.twig', array(
            'user' => $user,
            'form'   => $form->createView()
        ));
    }
}
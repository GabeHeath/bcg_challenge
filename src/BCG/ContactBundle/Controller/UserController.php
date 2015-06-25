<?php

namespace BCG\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function editAction($user_id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('BCGContactBundle:User')->find($user_id);

        if (!$user) {
            throw $this->createNotFoundException('User not found.');
        }

        $form = $this->createFormBuilder($user)
            ->add('username', 'text')
            ->add('name', 'text')
            ->add('phone', 'text')
            ->add('email', 'text')
            ->add('address', 'text')
            ->add('save', 'submit', array('attr' => array('class' => 'btn btn-primary btn-block top-space-sm')))
            ->getForm();

        $form->handleRequest($request);
     
        if ($form->isValid()) {
            $em->flush();

            $this->addFlash(
                'notice',
                $user->getName() . ' was updated!'
            );

            return $this->redirectToRoute('BCGContactBundle_agency_show', array('id' => $user->getAgency()->getId()));
        }
        
        $form->createView();

        return $this->render('BCGContactBundle:User:edit.html.twig', array(
            'user' => $user,
            'form'   => $form->createView()
        ));
    }
}
<?php

namespace BCG\ContactBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Extends fos_use_registration form.
        // Added additional fields for registration form.
        $builder->add('name');
        $builder->add('phone');
        $builder->add('address');
        $builder->add('agency');
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'bcg_user_registration';
    }
}
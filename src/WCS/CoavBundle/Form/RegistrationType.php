<?php

namespace WCS\CoavBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType

{
   public function buildForm(FormBuilderInterface $builder, array $options)

   {
       $builder->add('first_name')->add('last_name')->add('phoneNumber')->add('birthDate')->add('creationDate')->add('role')->add('note')->add('isACertifiedPilot')->add('isActive')->add('reservations')->add('reviews');

   }

   public function getParent()

   {
       return 'FOS\UserBundle\Form\Type\RegistrationFormType';
   }

   public function getBlockPrefix()

   {
       return 'app_user_registration';
   }

   public function getName()

   {
       return $this->getBlockPrefix();
   }

}

?>

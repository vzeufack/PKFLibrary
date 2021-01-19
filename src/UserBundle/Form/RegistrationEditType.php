<?php
// src/UserBundle/Form/RegistrationType.php

namespace UserBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use FOS\UserBundle\Util\LegacyFormHelper;
use AppBundle\Form\ImageType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;

class RegistrationEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $userCategories = ['Undergraduate' => 'Undergraduate', 'MBA' => 'MBA', 'BEA' => 'BEA', 'Lecturer' => 'Lecturer', 'Master' => 'Master' ];
        $batch = ['Freshman' => 'Freshman', 'Sophomore' => 'Sophomore', 'Junior' => 'Junior'];
        $specialty = ['Computer Science' => 'Computer Science', 'Electrical Engineering' => 'Electrical Engineering', 'Information Technology' => 'Information Technology', 'Economics' => 'Economics', 'Others' => 'Others' ];

        $builder
        ->add('firstName', TextType::class, array('required'=>false, 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder'=>'' )))

        -> add('familyName', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder'=>'')))

        -> add('userCategory', ChoiceType::class, array(
            'label' => 'Are you','attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; font-family:calibri'),
            'choices'=> $userCategories
            ))

        ->add('username', null, array('label' => 'Username', 'translation_domain' => 'FOSUserBundle', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; float:right', 'placeholder'=>'at least 2 characters' )))

        ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
            'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
            'options' => array('translation_domain' => 'FOSUserBundle'),
            'first_options' => array('label' => 'Password', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder'=>'at least 8 characters') ),
            'second_options' => array('label' => 'Password Confirmation', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder'=>'Reenter Password')),
            'invalid_message' => 'Password mismatch!',
            ))

        ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'Email', 'translation_domain' => 'FOSUserBundle', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px ', 'placeholder'=>'') ))

        -> add('phoneNumber', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => 'must have 9 digits' )
            ))        

        -> add('address', TextareaType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; width:280px;', 'placeholder'=>'Enter your address' )))

        -> add('image', ImageType::class, array('required' => false,'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder'=>'Choose a photo', 'invalid_message' => 'Upload as image' )))

        ->add('studentID', TextType::class, array('label' => 'Student ID (if undergraduate)', 'required' => false, 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder'=>'' )))

        -> add('batch', ChoiceType::class, array( 'label' => '', 'required' => false,
            'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; width:100%; font-family:calibri'),
            'choices'=> $batch ))

        -> add('specialty', ChoiceType::class, array( 'label' => '', 'required' => false,
            'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; width:100%; font-family:calibri'),
            'choices'=> $specialty ))
        ;
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
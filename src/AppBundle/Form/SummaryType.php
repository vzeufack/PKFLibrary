<?php

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Validator\Constraints\File;


class SummaryType extends AbstractType

{

  public function buildForm(FormBuilderInterface $builder, array $options)

  {

    $builder
      ->add('file', FileType::class, array('label' => 'Select a file', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:20px'),
        'constraints' => [
          new File([
          'maxSize' => '5M',
          'mimeTypes' => [
          'application/pdf',
          'application/x-pdf',
          ],
          'mimeTypesMessage' => 'Please upload a valid PDF',
          ])
        ]
        ))
    ;
  }
public function configureOptions(OptionsResolver $resolver)

  {

    $resolver->setDefaults(array(

      'data_class' => 'AppBundle\Entity\Image'

    ));

  }
}
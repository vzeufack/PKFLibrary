<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class CategoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('categoryCode', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
                ->add('categoryName', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
                ->add('submit', SubmitType::class, array('attr'=>array('class'=>'form-control btn-primary', 'style'=>'margin-bottom:0px', 'placeholder' => '')))
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Category'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_category';
    }


}

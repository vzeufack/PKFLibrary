<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use AppBundle\Entity\Category;
use AppBundle\Entity\SubCategory;


class AddCategoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('subCategoryCode', TextType::class, array('label' => 'Code','attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
                ->add('subCategoryName', TextType::class, array('label' => 'Name', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
                ->add('category', EntityType::class, array(
                'class' => 'AppBundle\Entity\Category',
                'choice_label' => 'CategoryName',
                'label' => 'Category',
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:30px; font-family:calibri')
              ))
                ->add('submit', SubmitType::class, array('attr'=>array('class'=>'form-control btn-primary', 'style'=>'margin-bottom:0px', 'placeholder' => '')))
                ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\SubCategory'
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

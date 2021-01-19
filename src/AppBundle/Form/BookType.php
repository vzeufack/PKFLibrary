<?php

// src/AppBundle/Form/BookType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use AppBundle\Entity\Book;
use AppBundle\Entity\Category;
use AppBundle\Entity\Course;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\CallbackTransformer;

class BookType extends AbstractType
{

    //private $categories;

    //public function __construct ( new Book($book) )
   // {
   //    $this->categories = $book->getCategories();
   // }

	public function buildForm( FormBuilderInterface $builder, array $options)
	{
        //$formats = ['A4' => '1', 'A5' => '2', 'A' => '3','A4+' => '4', 'A4-' => '5', 'A4++' => '6', 'A4--' => '7', 'A5+' => '8', 'A5-' => '9', 'A5++' => '10', 'A5--' => '11'];
        //$colors = ['Black On White' => '1', 'Bicolor' => '2'];
        //$languages = ['English' => '1', 'French' => '2'];
        //$states = ['New' => '1', 'Good' => '2', 'worn' => '3'];
 
		$builder
		   //-> setMethod('GET')
		   -> add('title', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))

		   -> add('subTitle', TextType::class, array('label'=>'Subtitle', 'required'=>false,'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))

		   -> add('author', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))

		   -> add('editor', TextType::class, array('required'=>false, 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))

		   -> add('edition', TextType::class, array('required'=>false,'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px;')))

		   -> add('quantity', NumberType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))

		   -> add('numberOfPages', NumberType::class, array('required'=>false, 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px')))

		   -> add('dateAcquired', DateType::class, array('widget' => 'choice', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px', 'placeholder' => 'yyyy-mm-dd')))

		   -> add('yearPublished', NumberType::class, array('required'=>false,'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))

		   -> add('isbn', TextType::class, array('label'=>'ISBN', 'required'=>false, 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'maxlength' => 13)))

           -> add('ean', TextType::class, array('required'=>false, 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'maxlength' => 13)))

	       -> add('pklibCode', TextType::class, array('required'=>false, 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px')))

	       -> add('format', TextType::class, array('required'=>false,'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px')))

	       -> add('color', TextType::class, array('required'=>false,'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px')))

	       -> add('volume', NumberType::class, array('required'=>false,'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px')))

	       -> add('cdNumber', NumberType::class, array('required'=>false, 'label'=>'Number of Cd', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px')))

	       -> add('location', TextType::class, array('required'=>false, 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))

	       -> add('language', TextType::class, array('required'=>false, 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))

		   -> add('acquisition', TextType::class, array('required'=>false, 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))

		    -> add('state', TextType::class, array('required' => false, 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:10px')))

		   -> add('coverPicture', ImageType::class, array('attr' => array('data_class'=>'AppBundle\Entity\Image','class' => 'form-control', 'style' => 'margin-bottom:30px')))

		   -> add('summary', SummaryType::class, array('attr' => array('data_class'=>'AppBundle\Entity\Image', 'class' => 'form-control', 'style' => 'margin-bottom:30px')))


		   ->add('subCategories', EntityType::class, array(
                'class' => 'AppBundle\Entity\SubCategory',
                'choice_label' => 'subCategoryName',
                'label' => 'Category',
                'required' => false,
                'multiple' => true,
                'expanded' => false,
                'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:30px; font-family:"helvetica"'),
                'group_by' => function($val, $key, $index) {
                    return $val->getCategory()->getCategoryName();
                }
              ))

		   /*->add('subCategories', SubCategoryType::class, array(
		   			'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:30px; font-family:calibri')))*/

		   //-> add('Submit', SubmitType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px')))
		 ;

         /*$builder->get('coverPicture')
            ->addModelTransformer(new CallbackTransformer(
                
            function ($key) {
             // transform the array to a string
                return $key->getFile();
            },
            function ($key) {
                // transform the string back to an array
                return $key;
            }));*/

        /*$builder->get('subCategories')
        ->addModelTransformer(new CallbackTransformer(
            ))
        ;
        function ($tagsAsArray) {
            // transform the array to a string
            return implode(', ', $tagsAsArray);
        },
        function ($tagsAsString) {
        // transform the string back to an array
            return explode(', ', $tagsAsString);
        }*/

		 /*$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();

                // this would be your entity, i.e. SportMeetup
                $data = $event->getData();

                $categories = $data->getCategories();
                $subcategories = null === $categories ? array() : $categories->getSubCategories();

                $form->add('subCategory', EntityType::class, array(
		   			'class' => 'AppBundle\Entity\SubCategory',
		   			'choice_label' => 'subCategoryName',
		   			'multiple' => false,
		   			'expanded' => false,
		   			'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:30px'),
                    'choices'     => $subcategories,
                ));
            }
        );*/

	}



    public function configureOptions (OptionsResolver $resolver)
    {
    	$resolver->setDefaults(array(
    		   'data_class' => Book::class,
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

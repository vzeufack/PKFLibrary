<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use UserBundle\Entity\User;
use AppBundle\Entity\Book;
use AppBundle\Entity\Category;
use AppBundle\Entity\SubCategory;
use AppBundle\Form\CategoryType;
use AppBundle\Form\SubCategoryType;

class CategoryController extends Controller
{
	/**
     * @Route("/Management/Category Management/Category List", name="categoryList")
     */
    public function categoryListAction(Request $request)
    {
       $em = $this->getDoctrine()->getManager();

	   $category = new Category();

	   $form = $this->createForm(CategoryType::class, $category);

	   $form->handleRequest($request);		
			
	   if( $form->isSubmitted() && $form->isValid() )
	   {   
	   	   $cat = $this->getDoctrine()
	       ->getRepository('AppBundle:Category')
	       ->findOneByCategoryCode( $form['categoryCode']->getData() );

	       if ( $cat == null ){
	   	     $em->persist($category);
	       }
	   	   else{
	   	     $cat->setCategoryName( $form['categoryName']->getData() );			  
	   	   }
	       $em->flush();
			  
		   //return $this->redirectToRoute('categoryList');
	   }

	   //$defaultData2 = array('message' => 'Type your message here');
	   $form3 = $this->createFormBuilder(null)
      -> add('categoryCode', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
      -> add('categoryName', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
      ->add('submit', SubmitType::class, array('label' => 'Confirm', 'attr'=>array('class'=>'btn btn-danger', 'style'=>'margin-bottom:10px;font-weight:bold; color:white;', 'placeholder' => '')))
      ->getForm(); 
      
      $form3->handleRequest($request);
      if( $form3->isSubmitted() && $form3->isValid() )
	   { 
		   $cat = $this->getDoctrine()
	       ->getRepository('AppBundle:Category')
	       ->findOneByCategoryCode( $form3['categoryCode']->getData() );
	       if ($cat != null){
	          $em->remove($cat);
	          $em->flush();
	      }
	   }
        
       $subCategory = new SubCategory();
	   $form4 = $this->createForm( SubCategoryType::class, $subCategory );

	   $form4->handleRequest($request);

	   if( $form4->isSubmitted() && $form4->isValid() )
	   {
	   	 $subCat = $this->getDoctrine()
	       ->getRepository('AppBundle:SubCategory')
	       ->findOneBySubCategoryCode( $form4['subCategoryCode']->getData() );
	     if ( $subCat == null )
	   	    $em->persist($subCategory);
	     else {
	     	//$oldcat = $subCat->getCategory();
	     	//$oldcat->removeSubcategory($subCat);
	     	$subCat->setSubCategoryName ( $form4['subCategoryName']->getData() );
	     	$subCat->setCategory($form4['category']->getData());
	     	//$categ = $form4['category']->getData();
	     	//$categ->addSubCategory($subCat);
	     }
	   	 $em->flush();
	     //return $this->redirectToRoute('categoryList');
	   }

	   //$defaultData3 = array('message' => 'Type your message here');
	     $form5 = $this->createFormBuilder(null)
	     -> add('subCategoryCode', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
	     -> add('subCategoryName', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
	     ->add('submit', SubmitType::class, array('label' => 'Confirm', 'attr'=>array('class'=>'btn btn-danger', 'style'=>'margin-bottom:10px;font-weight:bold;', 'placeholder' => '')))
	     ->getForm(); 

	     $form5->handleRequest($request);
	     if( $form5->isSubmitted() && $form5->isValid() )
	     { 
	     	$subcat = $this->getDoctrine()
	     	->getRepository('AppBundle:SubCategory')
	     	->findOneBySubCategoryCode( $form5['subCategoryCode']->getData() );
	     	if ($subcat != null){
	     	   $em->remove($subcat);
	     	   $em->flush();
	        }
	     }

	   $categories = $this->getDoctrine()
	   ->getRepository('AppBundle:Category')
	   ->findAll();
	
       return $this->render('pkflibrary/category/categoryList.html.twig', array(
	       'categories' => $categories, 'form' => $form->createView(),'form3' => $form3->createView(), 'form4' => $form4->createView(), 'form5' => $form5->createView()
	   ));
    }

   /**
     * @Route("/add_category", name="addCategory")
     */
    public function addCategoryAction(Request $request)
    {
	    $category = new Category();
	
	    $form = $this->createFormBuilder($category)
		   -> setMethod('GET')
		   -> add('category_name', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
		   -> add('category_code', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:15px')))
		   -> add('Submit', SubmitType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
		   -> getForm();
		   
		   $form->handleRequest($request);
		   
		   if( $form->isSubmitted() && $form->isValid() )
		   {
		      $em = $this->getDoctrine()->getManager();
			  $em->persist($category);
			  $em->flush();
			  
			  return $this->redirectToRoute('category_list');
			}
        // replace this example code with whatever you need
        return $this->render('library/category/addcategory.html.twig', array(
		   'form' => $form->createView()
		));
    }

    /**
     * @Route("/add_subCategory", name="addSubCategory")
     */
    public function addSubCategoryAction(Request $request)
    {
	    $category = new SubCategory();
	
		   $form = $this->createForm( SubCategoryType::class, $subCategory );
		   
		   $form->handleRequest($request);
		   
		   if( $form->isSubmitted() && $form->isValid() )
		   {
		      $em = $this->getDoctrine()->getManager();
			  $em->persist($subCategory);
			  $em->flush();
			  
			  return $this->redirectToRoute('category_list');
			}
        // replace this example code with whatever you need
        return $this->render('library/category/addcategory.html.twig', array(
		   'form' => $form->createView()
		));
    }    
}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Book;
use AppBundle\Form\BookType;
use AppBundle\Form\BookEditType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Category;
use AppBundle\Entity\SubCategory;
use AppBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;

 
class BookController extends Controller
{
    /**
     * @Route("/addBook/{userId}", name="addBook")
     */
    public function addBookAction ($userId, Request $request)
    {
       $book = new Book();
       
       $categories = $this->getDoctrine()
       ->getRepository('AppBundle:Category')
       ->findAll();

       $form = $this->createForm(BookType::class, $book);

	   $form->handleRequest($request);		
			
	   if( $form->isSubmitted() && $form->isValid() )
	   { 
		   $em = $this->getDoctrine()->getManager();
		   $book->setBooksAvailable($form['quantity']->getData());
		   $em->persist($book);			  
	       $em->flush();
			  
		  return $this->redirectToRoute('showBook', array('id'=>$book->getId(), 'userId' => $userId));
	   }
       // replace this example code with whatever you need
       return $this->render('pkflibrary/book/addBook.html.twig', array(
	      'form' => $form->createView(), 'page' => 0, 'categories' => $categories
	   ));
    }

    /**
     * @Route("/Books/Show/{id}/{userId}", name="showBook")
     */
    public function showBookAction($id,$userId, Request $request)
    {
	   $categories = $this->getDoctrine()
	   ->getRepository('AppBundle:Category')
	   ->findAll();

	   $book = $this->getDoctrine()
	   ->getRepository('AppBundle:Book')
	   ->findOneById($id);

	   $defaultData = array('message' => 'Type your message here');
    	$form = $this->createFormBuilder($defaultData)
    	-> add('keyword', SearchType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
    	->add('submit', SubmitType::class, array('label' => 'Search', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; font-weight:bold; color:white; background-color:#20B2AA', 'placeholder' => '')))
    	->getForm();

    	$form->handleRequest($request);
    	$keyword = $form["keyword"]->getData();

    	if ( $form->isSubmitted() && $form->isValid() ) {
    		$dql = "SELECT book FROM AppBundle:Book book JOIN book.subCategories sb JOIN sb.category ct WHERE book.title like '%$keyword%' OR book.author like '%$keyword%' OR book.subTitle like '%$keyword%' OR book.editor like '%$keyword%' OR book.language like '%keyword%' OR ct.categoryName like '%keyword%'";
            $em    = $this->get('doctrine.orm.entity_manager');
            $query = $em->createQuery($dql);

            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
               $query, /* query NOT result */
               $request->query->getInt('page', 1)/*page number*/,12
               /*limit per page*/
               );
            return $this->render('pkflibrary/book/book_list.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR, 'categories' => $categories, 'pagination' => $pagination, 'form'=>$form->createView(), 'keyword' => $keyword ]
            );
    	}

	   $user = $this->getDoctrine()
	   ->getRepository('UserBundle:User')
	   ->findOneById($userId);

	   $book_user = $this->getDoctrine()
	   ->getRepository('AppBundle:Book_User')
	   ->findBy ( array('book' => $book, 'user' => $user ) );	
       $canBorrow = true;
       foreach ($book_user as $userBorrow){
          if ($userBorrow->getStatus() != "returned" && $userBorrow->getStatus() != 'returned Late'){
             $canBorrow = false;
          }
       }       

        // replace this example code with whatever you need
        return $this->render('Pkflibrary/book/book_details.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR, 'categories' => $categories,'user' => $user, 'book' => $book, 'canBorrow' => $canBorrow, 'form' => $form->createView()]
            );
    }

     
	/**
     * @Route("return", name="return")
     *
	 public function redirectToReferer() {   
	 	return $this->redirect(
	 		$this->getRequest()
	 		->headers
	 		->get('referer')
	 		);
	 }*/

	 /**
     * @Route("/Book Modification/{id}{userId}", name="editBook")
     */
	 public function editBookAction(Request $request, $id, $userId)
     {
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('AppBundle:Book')->findOneById($id);

        $form = $this->createForm(BookEditType::class, $book);
        //$form['coverPicture']->setData($image);
        //$form['summary']->setData($summary);  
        
        $form->handleRequest($request);
        
        if( $form->isSubmitted() && $form->isValid() )
        {
            $em = $this->getDoctrine()->getManager();   
            //$em->persist($book);            
            $em->flush();
            
            return $this->redirectToRoute('showBook', array('id'=>$book->getId(), 'userId' => $userId ));
        }
        // replace this example code with whatever you need
        return $this->render('pkflibrary/book/editBook.html.twig', array(
            'form' => $form->createView(), 'page' => 0, 'book' => $book
            ));
     }
	
	/**
     * @Route("/deleteBook/{id}", name="deleteBook")
     */
	 public function deleteBookAction($id)
	 {
	    $em = $this->getDoctrine()->getManager();
		$book = $em->getRepository('AppBundle:Book')->findOneById($id);
		
		$em->remove($book);
		$em->flush();
		
		return $this->redirectToRoute("homepage");
	 }

	/**
     * @Route("/Books/Category/{code}", name="showCategoryBooks")
     */
    public function showCategoryBooksAction($code, Request $request)
    {
    	$category = $this->getDoctrine()
    	->getRepository('AppBundle:Category')
    	->findOneByCategoryCode($code);

    	$categories = $this->getDoctrine()
    	->getRepository('AppBundle:Category')
    	->findAll();

    	$page = 1;
        $keyword = "";

    	$defaultData = array('message' => 'Type your message here');
    	$form = $this->createFormBuilder($defaultData)
    	-> add('keyword', SearchType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
    	->add('submit', SubmitType::class, array('label' => 'Search', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; font-weight:bold; color:white; background-color:#20B2AA', 'placeholder' => '')))
    	->getForm();

    	$form->handleRequest($request);
    	
    	if ( $form->isSubmitted() && $form->isValid() ) {
            $keyword = $form["keyword"]->getData();
    		$dql = "SELECT book FROM AppBundle:Book book JOIN book.subCategories sb JOIN sb.category ct WHERE book.title like '%$keyword%' OR book.author like '%$keyword%' OR book.subTitle like '%$keyword%' OR book.editor like '%$keyword%' OR book.language like '%keyword%' OR ct.categoryName like '%keyword%'";
    	}
    	else{
    		$dql   = "SELECT books FROM AppBundle:Book books JOIN books.subCategories sb JOIN sb.category ct WHERE ct.categoryCode = '$code'";
    	}
    	$em    = $this->get('doctrine.orm.entity_manager');

    	$query = $em->createQuery($dql);

    	$paginator  = $this->get('knp_paginator');
    	$pagination = $paginator->paginate(
    	   $query, /* query NOT result */
    	   $request->query->getInt('page', $page)/*page number*/,12/*limit per page*/
    	);

	   // make a search by category ID -------------------------------------------------

       // replace this example code with whatever you need
    	return $this->render('Pkflibrary/book/booksByCategory.html.twig', [
    		'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR, 'categories' => $categories, 'pagination' => $pagination, 'form' => $form->createView(), 'category' => $category, 'keyword' => $keyword]
    		);
    }

    /**
     * @Route("/Books/Category/SubCategory/{code}", name="showSubCategoryBooks")
     */
    public function showSubCategoryBooksAction($code, Request $request)
    {
        $subCategory = $this->getDoctrine()
	   ->getRepository('AppBundle:SubCategory')
	   ->findOneBySubCategoryCode($code);

	   $categories = $this->getDoctrine()
	   ->getRepository('AppBundle:Category')
	   ->findAll();

	   $page = 1;
       $keyword = "";

	   $defaultData = array('message' => 'Type your message here');
    	$form = $this->createFormBuilder($defaultData)
    	-> add('keyword', SearchType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
    	->add('submit', SubmitType::class, array('label' => 'Search', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; font-weight:bold; color:white; background-color:#20B2AA', 'placeholder' => '')))
    	->getForm();

    	$form->handleRequest($request);

    	if ( $form->isSubmitted() && $form->isValid() ) {
            $keyword = $form["keyword"]->getData();
    		$dql = "SELECT book FROM AppBundle:Book book JOIN book.subCategories sb JOIN sb.category ct WHERE book.title like '%$keyword%' OR book.author like '%$keyword%' OR book.subTitle like '%$keyword%' OR book.editor like '%$keyword%' OR book.language like '%keyword%' OR ct.categoryName like '%keyword%'";
    	}
    	else{
    		$dql = "SELECT books FROM AppBundle:Book books JOIN books.subCategories sb WHERE sb.subCategoryCode = '$code'";
    	}
	   $em = $this->get('doctrine.orm.entity_manager');

	   $query = $em->createQuery($dql);

	   $paginator  = $this->get('knp_paginator');
	   $pagination = $paginator->paginate(
	   	$query, /* query NOT result */
	   	$request->query->getInt('page', $page)/*page number*/,12
	   	/*limit per page*/
	   	);
        // replace this example code with whatever you need
        return $this->render('Pkflibrary/book/booksBySubCategory.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR, 'categories' => $categories,'pagination' => $pagination, 'form' => $form->createView(), 'subCategory' => $subCategory, 'keyword' => $keyword]
            );
    }
}



<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use UserBundle\Entity\User;
use AppBundle\Entity\Book;
use AppBundle\Form\BookType;
use AppBundle\Entity\Category;
use AppBundle\Entity\DateBorrowed;

use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
	/**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
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
         $dql   = "SELECT book FROM AppBundle:Book book JOIN book.subCategories sb JOIN sb.category ct WHERE book.title like '%$keyword%' OR book.author like '%$keyword%' OR book.subTitle like '%$keyword%' OR book.editor like '%$keyword%' OR book.language like '%keyword%' OR ct.categoryName like '%keyword%'";
         //$dql   = "SELECT book FROM AppBundle:Book book WHERE 'SOUNDEX(book.title) = SOUNDEX($keyword)'";
      }
      else{
        $dql = "SELECT book FROM AppBundle:Book book";
      }

     $em    = $this->get('doctrine.orm.entity_manager');
     $query = $em->createQuery($dql);

     $paginator  = $this->get('knp_paginator');
     $pagination = $paginator->paginate(
     $query, /* query NOT result */
     $request->query->getInt('page', $page)/*page number*/,12
      /*limit per page*/
     );
  
        // replace this example code with whatever you need
        return $this->render('pkflibrary/book/book_list.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR, 'categories' => $categories, 'pagination' => $pagination, 'form'=>$form->createView(), 'keyword' => $keyword ]
            );
    }

    /**
     * @Route("help", name="help")
     */
    public function help()
    {

      return $this->render('pkflibrary/user/help.html.twig',['page'=>0]);
    }

    /**
     * @Route("about", name="about")
     */
    public function about()
    {

      return $this->render('pkflibrary/about.html.twig',['page'=>0]);
    }


    /**
     * @Route("topdf/{data}", name="topdf")
     */
    public function topdf(Request $request, $data)
    {

      $snappy = $this->get("knp_snappy.pdf");
      $data = $this->getDoctrine()->getRepository('AppBundle:Book_User')->findOneById($data);
     
      $html = $this->renderView('pkflibrary/topdf.html.twig', ['data'=> $data]);

      $filename = "myfirstpdf";
      return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

    /**
     * @Route("viewAndBorrow", name="viewAndBorrow")
     */
    public function viewAndBorrow()
    {

      return $this->render('pkflibrary/help/viewAndBorrow.html.twig',['page'=>0]);
    }

    /**
     * @Route("myAccount", name="myAccount")
     */
    public function myAccount()
    {

      return $this->render('pkflibrary/help/myAccount.html.twig',['page'=>0]);
    }

    /**
     * @Route("searchBook", name="searchBook")
     */
    public function searchBook()
    {

      return $this->render('pkflibrary/help/searchBook.html.twig',['page'=>0]);
    }

    /**
     * @Route("userManagements", name="userManagements")
     */
    public function userManagement()
    {

      return $this->render('pkflibrary/help/helpUserManagement.html.twig',['page'=>0]);
    }

    /**
     * @Route("bookManagements", name="bookManagements")
     */
    public function bookManagements()
    {

      return $this->render('pkflibrary/help/helpBookManagement.html.twig',['page'=>0]);
    }

    /**
     * @Route("borrowManagements", name="borrowManagements")
     */
    public function borrowManagements()
    {

      return $this->render('pkflibrary/help/helpBorrowManagement.html.twig',['page'=>0]);
    }
	
}

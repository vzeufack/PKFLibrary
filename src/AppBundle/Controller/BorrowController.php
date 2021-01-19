<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Book;
use UserBundle\Entity\User;
use AppBundle\Entity\Book_User;
use AppBundle\Entity\DateBorrowed;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThan;
/*use AppBundle\Form\BookType;
use AppBundle\Entity\Category;
use AppBundle\Entity\SubCategory;
use AppBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;*/


class BorrowController extends Controller
{
    /**
     * @Route("/borrow/{bookId}/{userId}", name="borrow")
     */
    public function borrowAction ($bookId, $userId, Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $user = new User();

      $categories = $this->getDoctrine()
      ->getRepository('AppBundle:Category')
      ->findAll();

      $user = $this->getDoctrine()
      ->getRepository('UserBundle:User')
      ->findOneById($userId);
      $book = new Book();

      $book = $this->getDoctrine()
      ->getRepository('AppBundle:Book')
      ->findOneById($bookId);

      $book_user = $this->getDoctrine()
     ->getRepository('AppBundle:Book_User')
     ->findBy ( array('book' => $book, 'user' => $user ) ); 
       $canBorrow = true;
       foreach ($book_user as $userBorrow){
          if ($userBorrow->getStatus() != "Returned" && $userBorrow->getStatus() != 'Returned late'){
             $canBorrow = false;
          }
       }     

      if( $book != null && $canBorrow == true ){
       $book_user = new Book_User();
       $book_user->setBook($book);
       $book_user->setUser($user);
       $book_user->setDateRequested( new \Datetime() );
         //$book_user->setDateOfExit( new \Datetime() );
       $book_user->setDueDate( new \Datetime("+ 1 day") );
       $book_user->setStatus('Requested');  
       $book->setBooksAvailable($book->getBooksAvailable() - 1);    
       $em->persist($book_user);
       $em->flush();
     }

     $booksBorrowed = $this->getDoctrine()
     ->getRepository('AppBundle:Book_User')
     ->findByUser($userId);
     $years = 0; $months = 0; $days=0;

     foreach ($booksBorrowed as $bookBorrowed) {
        if ($bookBorrowed->getStatus() != "Returned" && $bookBorrowed->getStatus() != "Requested"){
          $date1 = new \DateTime();
          $date1Converted = $date1->format('Y-m-d');
          $date2 = $bookBorrowed->getDueDate();
          $date2Converted = $date2->format('Y-m-d');
          $delay = strtotime($date1Converted) - strtotime($date2Converted);
          if ( $delay > 0){
            $years = floor($delay / (365*60*60*24));
            $months = floor(($delay - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($delay - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
            $bookBorrowed->setStatus("Late");
            $bookBorrowed->setDelay("".$years." year(s) ".$months." month(s) ".$days." day(s)");
            $em->flush();
          }
      }
     }

     return $this->render('pkflibrary/book/borrowReport.html.twig', [
       'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR, 'categories' => $categories, 'booksBorrowed' => $booksBorrowed]
       );
   }

    /**
     * @Route("/management/borrow Management", name="manageBorrows")
     */
    public function manageBorrowsAction (Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $categories = $this->getDoctrine()
      ->getRepository('AppBundle:Category')
      ->findAll();

      $defaultData = array('message' => 'Type your message here');
      $form = $this->createFormBuilder($defaultData)
      -> add('username', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
      -> add('bookId', NumberType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
      -> add('Due_date', DateType::class, array('widget' => 'choice', 'data' => new \DateTime("now"), 'attr' => array('class' => '', 'style' => 'margin-bottom:0px; font-size:25px', 'placeholder' => 'yyyy-mm-dd'),
        ))
      ->add('borrow', SubmitType::class, array('label' => 'Borrow', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; font-weight:bold; color:white; background-color:#20B2AA', 'placeholder' => '')))
      ->add('return', SubmitType::class, array('label' => 'Return', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px;font-weight:bold; color:white; background-color:green', 'placeholder' => '')))
      ->getForm();

      $form->handleRequest($request);
      if ( $form->isSubmitted() && $form->isValid() ) {

        $book = $this->getDoctrine()
           ->getRepository('AppBundle:Book')
           ->findOneById($form['bookId']->getData());

           $user = $this->getDoctrine()
           ->getRepository('UserBundle:User')
           ->findOneByUsername($form['username']->getData());

           $book_user = $this->getDoctrine()
           ->getRepository('AppBundle:Book_User')
           ->findOneBy ( array('book' => $book, 'user' => $user ) );

        if ($form->get('borrow')->isClicked()){
           // data is an array with "name", "email", and "message" keys
           //$data = $form->getData();
           $book_user->setStatus("Borrowed");
           $book_user->setDueDate($form['Due_date']->getData());
           $dateBorrowed = new DateBorrowed();
           $dateBorrowed->setDateBorrowed( new \DateTime() );
           $em->persist ( $dateBorrowed );
           //$book_user->addDatesBorrowed($dateBorrowed);
           $dateBorrowed->setBookUser($book_user);
           
           //$em->persist($book_user);
        }
        else if ($form->get('return')->isClicked())
        {  
           if ( $book_user->getStatus() != 'Late')
             $book_user->setStatus("Returned");
           else
             $book_user->setStatus("Returned late");
           $book_user->setDateReturned( new \DateTime() );
           $book_user->setDueDate($form['Due_date']->getData());
           $book->setBooksAvailable($book->getBooksAvailable() + 1);
        }
        else {}
        $em->flush();
     }

     $booksBorrowed = $this->getDoctrine()
     ->getRepository('AppBundle:Book_User')
     ->findAll();

     $years = 0; $months = 0; $days=0;

     foreach ($booksBorrowed as $bookBorrowed) {
        if ($bookBorrowed->getStatus() != "returned" && $bookBorrowed->getStatus() != "requested"){
          $date1 = new \DateTime();
          $date1Converted = $date1->format('Y-m-d');
          $date2 = $bookBorrowed->getDueDate();
          $date2Converted = $date2->format('Y-m-d');
          $delay = strtotime($date1Converted) - strtotime($date2Converted);
          if ( $delay > 0){
            $years = floor($delay / (365*60*60*24));
            $months = floor(($delay - $years * 365*60*60*24) / (30*60*60*24));
            $days = floor(($delay - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
            $bookBorrowed->setStatus("Late");
            $bookBorrowed->setDelay("".$years." year(s) ".$months." month(s) ".$days." day(s)");
            $em->flush();
          }
      }
     }

     return $this->render('pkflibrary/book/borrowManagement.html.twig', [
      'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR, 'booksBorrowed' => $booksBorrowed, 'form' => $form->createView()]
      );
   }

   /**
     * @Route("/management/borrow Management/Request deleted", name="deleteRequested")
     */
    public function deleteRequestedAction (Request $request)
    {
      $em = $this->getDoctrine()->getManager();

      $defaultData = array('message' => 'Type your message here');
      $form = $this->createFormBuilder($defaultData)
      -> add('username', TextType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
      -> add('bookId', NumberType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
      -> add('Due_date', DateType::class, array('widget' => 'choice', 'data' => new \DateTime("now"), 'attr' => array('class' => '', 'style' => 'margin-bottom:0px; font-size:25px', 'placeholder' => 'yyyy-mm-dd')))
      ->add('borrow', SubmitType::class, array('label' => 'Borrow', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; font-weight:bold; color:white; background-color:#20B2AA', 'placeholder' => '')))
      ->add('return', SubmitType::class, array('label' => 'Return', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px;font-weight:bold; color:white; background-color:green', 'placeholder' => '')))
      ->getForm();

      $form->handleRequest($request);
      if ( $form->isSubmitted() && $form->isValid() ) {

        $book = $this->getDoctrine()
           ->getRepository('AppBundle:Book')
           ->findOneById($form['bookId']->getData());

           $user = $this->getDoctrine()
           ->getRepository('UserBundle:User')
           ->findOneByUsername($form['username']->getData());

           $book_user = $this->getDoctrine()
           ->getRepository('AppBundle:Book_User')
           ->findOneBy ( array('book' => $book, 'user' => $user ) );

        if ($form->get('borrow')->isClicked()){
           // data is an array with "name", "email", and "message" keys
           //$data = $form->getData();
           $book_user->setStatus("Borrowed");
           $book_user->setDueDate($form['Due_date']->getData());
           $dateBorrowed = new DateBorrowed();
           $dateBorrowed->setDateBorrowed( new \DateTime() );
           $em->persist ( $dateBorrowed );
           //$book_user->addDatesBorrowed($dateBorrowed);
           $dateBorrowed->setBookUser($book_user);
           
           //$em->persist($book_user);
        }
        else if ($form->get('return')->isClicked())
        {  
           if ( $book_user->getStatus() != 'Late')
             $book_user->setStatus("Returned");
           else
             $book_user->setStatus("Returned late");
           $book_user->setDateReturned( new \DateTime() );
           $book_user->setDueDate($form['Due_date']->getData());
           $book->setBooksAvailable($book->getBooksAvailable() + 1);
        }
        else {}
        $em->flush();
     }

     $booksBorrowed = $this->getDoctrine()
     ->getRepository('AppBundle:Book_User')
     ->findAll();

     foreach ($booksBorrowed as $bookBorrowed) {
        if ($bookBorrowed->getStatus() == "Requested"){
            $em->remove($bookBorrowed);
            $em->flush();
          }
      }

     return $this->render('pkflibrary/book/borrowManagement.html.twig', [
      'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,'booksBorrowed' => $booksBorrowed, 'form' => $form->createView()]
      );
   }
}



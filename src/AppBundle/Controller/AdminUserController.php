<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use UserBundle\Entity\User;
use UserBundle\Form\RegistrationType;
use UserBundle\Form\RegistrationEditType;
use AppBundle\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AdminUserController extends Controller
{
     /**
     * @Route("/admin/userListSearch/{page}/{categorie}/{enabled}", name="AdminUserListSearch")
     */
     public function AdminUserListSearchAction(Request $request , $page , $categorie, $enabled)
     {
        $em = $this->get('doctrine.orm.entity_manager');
        $keyword = "";

        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
        -> add('keyword', SearchType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
        ->add('submit', SubmitType::class, array('label' => 'Search', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; font-weight:bold; color:white; background-color:#20B2AA', 'placeholder' => '')))
        ->getForm();

        $form->handleRequest($request);        

        if ( $form->isSubmitted() && $form->isValid() ) {
          $keyword = $form["keyword"]->getData();
          $dql = "SELECT user FROM UserBundle:User user WHERE user.enabled = $enabled AND user.userCategory = '$categorie' AND (user.familyName like '%$keyword%' OR user.firstName like '%$keyword%' OR user.username like '%$keyword%' OR user.specialty like '%$keyword%' OR user.address like '%keyword%' OR user.batch like '%keyword%')";
        }
        else {
         $dql = "SELECT user FROM UserBundle:User user WHERE user.enabled = $enabled AND user.userCategory = '$categorie' ";
        }        

        $query = $em->createQuery($dql);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
           $query, /* query NOT result */
           $request->query->getInt('page', $page)/*page number*/,
           10/*limit per page*/
        );
       // parameters to template

      if ($enabled == 'false'){
         return $this->render('pkflibrary/user/adminUserDisableList.html.twig', array(
            'page' => $page , 'pagination' => $pagination, 'form'=>$form->createView(), 'keyword' => $keyword,'category' => $categorie 
         ));
      }else{
         return $this->render('pkflibrary/user/adminUserEnableList.html.twig', array(
          'page' => $page , 'pagination' => $pagination, 'form'=>$form->createView(), 'keyword' => $keyword, 'category' => $categorie
         ));

    }
   }

   /**
    * @Route("/admin/userDisableList/{page}", name="AdminUserDisableList")
    */
   public function AdminUserDisableListAction(Request $request , $page)
   {
      $em = $this->get('doctrine.orm.entity_manager');
      $keyword = "";

      $defaultData = array('message' => 'Type your message here');
      $form = $this->createFormBuilder($defaultData)
      -> add('keyword', SearchType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
      ->add('submit', SubmitType::class, array('label' => 'Search', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; font-weight:bold; color:white; background-color:#20B2AA', 'placeholder' => '')))
      ->getForm();

      $form->handleRequest($request);     

      if ( $form->isSubmitted() && $form->isValid() ) {
        $keyword = $form["keyword"]->getData();
        $dql = "SELECT user FROM UserBundle:User user WHERE user.enabled = false AND (user.familyName like '%$keyword%' OR user.firstName like '%$keyword%' OR user.username like '%$keyword%' OR user.specialty like '%$keyword%' OR user.address like '%keyword%' OR user.batch like '%keyword%')";
      }
      else {
         $dql = " SELECT user FROM UserBundle:User user WHERE user.enabled = false ";
      }

      $query = $em->createQuery($dql);
      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
         $query, /* query NOT result */
         $request->query->getInt('page', $page)/*page number*/,
         10/*limit per page*/
      );
     // parameters to template

     return $this->render('pkflibrary/user/adminUserDisableList.html.twig', array(
        'page' => $page , 'pagination' => $pagination, 'form'=>$form->createView(), 'keyword' => $keyword, 'category' => 'All'
     ));
   }


    /**
     * @Route("/admin/userEnableList/{page}", name="AdminUserEnableList")
     */
     public function AdminUserEnableListAction(Request $request , $page)
     {
        $em = $this->get('doctrine.orm.entity_manager');
        $keyword = "";

        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
        -> add('keyword', SearchType::class, array('attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px', 'placeholder' => '')))
        ->add('submit', SubmitType::class, array('label' => 'Search', 'attr'=>array('class'=>'form-control', 'style'=>'margin-bottom:10px; font-weight:bold; color:white; background-color:#20B2AA', 'placeholder' => '')))
        ->getForm();

        $form->handleRequest($request);
        

        if ( $form->isSubmitted() && $form->isValid() ) {
          $keyword = $form["keyword"]->getData();
          $dql = "SELECT user FROM UserBundle:User user WHERE user.enabled = true AND (user.familyName like '%$keyword%' OR user.firstName like '%$keyword%' OR user.username like '%$keyword%' OR user.specialty like '%$keyword%' OR user.address like '%keyword%' OR user.batch like '%keyword%')";
        }
        else {
           $dql = " SELECT user FROM UserBundle:User user WHERE user.enabled = true ";
        }

        $query = $em->createQuery($dql);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
           $query, /* query NOT result */
           $request->query->getInt('page', $page)/*page number*/,
           10/*limit per page*/
        );       

        return $this->render('pkflibrary/user/adminUserEnableList.html.twig', array(
          'page' => $page , 'pagination' => $pagination, 'form'=>$form->createView(), 'keyword' => $keyword, 'category' => 'All'
        ));
    }

    /**
     * @Route("/admin/User details/{id}/{page}", name="AdminUserDetail")
     */
     public function UserDetailAction( User $User, $page)
     {
        return $this->render('pkflibrary/user/adminUserDetails.html.twig', array(
            'user' => $User, 'page'=>$page, 'form' => null, 'keyword' => "", 'category'=> ""
            ));
     }

    /**
     * @Route("/admin/userList/Enable/{id}/{page}", name="AdminUserEnabled")
     */
    public function UserEnableAction( Request $request, User $User, $page)
    {
        $User-> SetEnabled(true);
        $em = $this->getDoctrine()->getManager();       
        $em->persist($User);        
        $em->flush();

        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = " SELECT user FROM UserBundle:User user WHERE user.enabled = true ";

        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', $page)/*page number*/,
            10/*limit per page*/
            );

       /*return $this->render('library/book/book_list.html.twig', array(
         'books' => $books
           ));*/
           return $this->render('pkflibrary/user/adminUserEnableList.html.twig', array(
             'page' => $page , 'pagination' => $pagination, 'form' => null, 'keyword' => "", 'category'=> ""
            ));
       }

       /**
     * @Route("/admin/userList/Disable/{id}/{page}", name="AdminUserDisable")
     */
    public function UserDisableAction( Request $request, User $User, $page)
    {
        $User-> SetEnabled(false);
        $em = $this->getDoctrine()->getManager();             
        $em->persist($User);              
        $em->flush();

        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = " SELECT user FROM UserBundle:User user WHERE user.enabled = false ";

        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', $page)/*page number*/,
            10/*limit per page*/
            );

       /*return $this->render('library/book/book_list.html.twig', array(
           'books' => $books
           ));*/
           return $this->render('pkflibrary/user/adminUserDisableList.html.twig', array( 'page' => $page , 'pagination' => $pagination, 'form' => null, 'keyword' => "", 'category'=> ""
            ));
       }

    /**
     * @Route("/User Management/addUser", name="addUser")
     */
       public function addUserAction (Request $request)
       {
         $user = new User();

         $form = $this->createForm(RegistrationType::class, $user);

         $form->handleRequest($request);    

         if( $form->isSubmitted() && $form->isValid() )
         { 
           $em = $this->getDoctrine()->getManager();
           $em->persist($user);       
           $em->flush();

           return $this->redirectToRoute('AdminUserDetail', array('id'=>$user->getId(), 'page' => 1));
         }
         // replace this example code with whatever you need
         return $this->render('pkflibrary/user/addUser.html.twig', array(
          'form' => $form->createView(), 'page' => 1
          ));
       }

        /**
         * @Route("/User Management/Edit User/{id}", name="editUser")
         */
        public function editUserAction(Request $request, $id)
        {
          $em = $this->getDoctrine()->getManager();
          $user = $em->getRepository('UserBundle:User')->findOneById($id);
         /* $image = new Image();
          $image->setFile( new UploadedFile($user->getImage()->getUploadDir().'/'.$user->getImage()->getId().'.'.$user->getImage()->getUrl(), $user->getImage()->getId(),null,null, null,true));
          //$image->setFile( $book->getCoverPicture()->getFile());
          $user->setImage($image); */

          $form = $this->createForm(RegistrationEditType::class, $user);  

          $form->handleRequest($request);

          if( $form->isSubmitted() && $form->isValid() )
          {
            $em = $this->getDoctrine()->getManager();   
            $em->persist($user);        
            $em->flush();

            return $this->redirectToRoute('AdminUserDetail', array('id'=>$user->getId(), 'page' => 1));
          }
        // replace this example code with whatever you need
          return $this->render('pkflibrary/user/editUser.html.twig', array(
            'form' => $form->createView(), 'page' => 1, 'user' => $user
            ));
        }

        /**
         * @Route("/deleteUser/{id}", name="deleteUser")
         */
        public function deleteUserAction($id)
        {
          $em = $this->getDoctrine()->getManager();
          $user = $em->getRepository('UserBundle:User')->findOneById($id);

          $em->remove($user);
          $em->flush();

          if ( $user->isEnabled() )
             return $this->redirectToRoute('AdminUserEnableList', array('page' => 1));
          else
             return $this->redirectToRoute('AdminUserDisableList', array('page' => 1));
        }

        /**
         * @Route("/user/{id}/{page}", name="UserDetail")
         */
         public function UsersimpleDetailAction( User $User, $page)
         {
            return $this->render('pkflibrary/user/UserDetails.html.twig', array(
                'user' => $User, 'page'=>$page, 'keyword' => "", 'category' => "", 'form'=>null
                ));
         }
   }
